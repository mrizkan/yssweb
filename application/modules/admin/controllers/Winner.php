<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Winner extends MY_Controller
{
    var $page = "winner_dogs";

    function __construct()
    {
        parent::__construct();
        $this->load->model('Winners_model', 'model');
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


        $this->form_validation->set_rules("form[WinnerTitle]", "Winner Name", "required");
        $this->form_validation->set_rules("form[Image]", "Winner Name", "required");

        if ($this->form_validation->run()) {

            $post = $this->input->post('form');
            $post['MoreImage'] = json_encode($this->input->post('image'));
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
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Winner Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
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
        $config['image_library'] = 'gd2';
        $config['source_image'] = $data['full_path'];
        $config['x_axis'] = 0;
        $config['y_axis'] = 0;
        $config['maintain_ratio'] = FALSE;

        $source_ratio = $data['image_width'] / $data['image_height'];
        $new_ratio = 540 / 320;
        if ($source_ratio != $new_ratio) {
            if ($new_ratio > $source_ratio || (($new_ratio == 1) && ($source_ratio < 1))) {
                $config['width'] = $data['image_width'];
                $config['height'] = round($data['image_width'] / $new_ratio);
                $config['y_axis'] = round(($data['image_height'] - $config['height']) / 2);
                $config['x_axis'] = 0;
            } else {
                $config['width'] = round($data['image_height'] * $new_ratio);
                $config['height'] = $data['image_height'];
                $size_config['x_axis'] = round(($data['image_width'] - $config['width']) / 2);
                $size_config['y_axis'] = 0;
            }
        }
        $config['new_image'] = $data['full_path'];
        $this->load->library('image_lib', $config);
        $this->image_lib->crop();
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
        $config['width'] = 360;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }


}