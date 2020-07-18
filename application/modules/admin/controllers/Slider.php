<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Slider extends MY_Controller
{
    var $page = "slider";
    var $img_width = 870;
    var $img_height = 420;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Slider_model', 'model');
        $this->controller = get_class();
    }

    function create()
    {
        $this->obj = $this->model->get_all_fields();
        $d = [
            'page' => "$this->page/form",
            'obj' => $this->obj
        ];
        $this->_form($d);
    }

    function _form(&$d, $_id = 0)
    {


        $this->form_validation->set_rules("form[SliderTitle]", "Slider Name", "required");
        $this->form_validation->set_rules("form[Image]", "Slider Name", "required");

        if ($this->form_validation->run()) {

            $post = $this->input->post('form');
            $this->db->trans_begin();
            if ($_id) {
                $this->model->update($_id, $post);
            } else {
                $this->model->insert($post);
            }

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' . (!$_id ? "Creation." : "Update.") . ' Failure !!! </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Slider Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
                $this->db->trans_commit();
            }
            redirect(current_url());
        }

        $this->view($d);
    }

    function edit($_id = 0)
    {
        if ($_id) {
            $d = [
                'page' => "$this->page/form",
                'obj' => $this->model->get($_id)
            ];
            $this->_form($d, $_id);
        } else {
            $this->index();
        }
    }

    function index()
    {
        $d = [
            'page' => "$this->page/index",
            'records' => $this->model->get_all()
        ];
        $this->_form($d);
    }

    function delete($_id = 0)
    {
        $this->model->delete($_id);
        redirect(base_url("admin/$this->controller"));
    }

    function crop($data)
    {
        $this->load->library('image_lib', []);
        $this->image_lib->clear();
    }

    function resize($data)
    {
        $config = array();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $data['full_path'];
        $config['create_thumb'] = FALSE;
        $config['new_image'] = FCPATH . 'media/img/thumbs/' . $data['file_name'];
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 120;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }


    function rearrange()
    {
        $d = [
            'page' => "$this->page/rearrange",
            'record' => $this->model->order_by("Order", "ASC")->get_all()
        ];
        $this->_form($d);

    }


}