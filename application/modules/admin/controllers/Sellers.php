<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Sellers extends MY_Controller
{
    var $page = "sellers";

    function __construct()
    {
        parent::__construct();
        $this->load->model('Sellers_model', 'model');
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

        $this->load->model('breeder_model', 'breed');
        $d['breeders'] = $this->breed->get_all();

        $this->form_validation->set_rules("form[SellerTitle]", "Name", "required");
        $this->form_validation->set_rules("form[BreederId]", "Breed ", "required");
        $this->form_validation->set_rules("form[Email]", "Email", "required|valid_email");

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
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Gallery Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
                $this->db->trans_commit();
            }
            redirect(current_url());
        }

        $d['titles'] = [
            'Mr.',
            "Mrs.",
            "Ms."
        ];

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

}