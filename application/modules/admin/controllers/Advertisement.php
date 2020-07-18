<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Advertisement extends MY_Controller
{
    var $page = "advertisement";
//    var $img_width = 1000;
//    var $img_height = 1000;


    function __construct()
    {
        parent::__construct();
        $this->load->model('Advertisement_model', 'model');
        $this->load->model('Country_model', 'country');
//        $this->load->model('Brand_model', 'brand');
        $this->controller = get_class();

        $this->location = [
            ['index' => '1', 'value' => "Home Page Location 01"],
            ['index' => '2', 'value' => "Home Page Location 02"],
            ['index' => '3', 'value' => "Home Page Location 03"],
            ['index' => '4', 'value' => "Home Page Location 04"],
            ['index' => '5', 'value' => "Home Page Location 05"],
//            ['index'=>'6', 'value'=> "Home Page Location 06"],
//            ['index'=>'7', 'value'=> "Packages Page Advertisement"],
//            ['index'=>'8', 'value'=> "Package-Details page Advertisement"],
//            ['index'=>'9', 'value'=> "IP Tv page Advertisement"]
        ];


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


        $this->form_validation->set_rules("form[AddTitle]", "Advertisement Title", "required");
        $this->form_validation->set_rules("form[LocationId]", "Advertisement Location", "required");
//        $this->form_validation->set_rules("form[Salary]", "Salary", "required");
//        $this->form_validation->set_rules("form[ShortDescription]","Short Description","required");
        $this->form_validation->set_rules("form[Image]", "Advertisement Image", "required");


        if ($this->form_validation->run()) {

            $post = $this->input->post('form');
//            $post['MoreImage'] = json_encode($this->input->post('image'));
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
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Advertisement Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
                $this->db->trans_commit();
            }

            redirect(current_url());
        }
        $d['locations'] = $this->location;


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
//            'records' => $this->model->join('country')
//                ->fields("iptv.*,country.CountryId, CountryTitle   ")
//                ->get_all()
            'records' => $this->model->get_all()
        ];
//        p($d['records']);
//        echo $this->db->last_query();
        $d['locations'] = $this->location;
        $this->view($d);
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
            'records' => $this->model->join('country')
                ->fields("{$this->model->table()}.* , country.CountryId, CountryTitle ")->order_by("Order", "ASC")
                ->get_all()
//            'records' => $this->model->limit(18)->get_all()
        ];
//        $d = [
//            'page' => "$this->page/rearrange",
//            'record' => $this->model->order_by("Order", "ASC")->get_all()
//        ];
//        p($this->db->last_query());
        $this->_form($d);

    }


}