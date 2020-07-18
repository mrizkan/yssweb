<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Brand extends MY_Controller
{
    var $page = "brand";
    var $img_width = 600;
    var $img_height = 600;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Brand_model', 'model');
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


        $this->form_validation->set_rules("form[BrandTitle]", "Category Name", "required");
//        $this->form_validation->set_rules("form[Image]","Category Image","required");

        if ($this->form_validation->run()) {

            $post = $this->input->post('form');
            $post['MoreImage'] = json_encode($this->input->post('image'));
            $this->db->trans_begin();
            if ($_id) {

                $this->model->update($_id, $post);

            } else {
                //  p( $post);exit;
                $this->model->insert($post);

            }

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' . (!$_id ? "Creation." : "Update.") . ' Failure !!! </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Category Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
                $this->db->trans_commit();
            }
//            p($this->db->last_query());
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

    function rearrange()
    {
        $d = [
            'page' => "$this->page/rearrange",
            'record' => $this->model->order_by("Order", "ASC")->get_all()
        ];
        $this->_form($d);

    }


}