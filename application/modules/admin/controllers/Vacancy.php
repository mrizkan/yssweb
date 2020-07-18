<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Vacancy extends MY_Controller
{
    var $page = "vacancy";
    var $img_width = 400;
    var $img_height = 400;


    function __construct()
    {
        parent::__construct();
        $this->load->model('Vacancy_model', 'model');
        $this->load->model('Country_model', 'country');
//        $this->load->model('Brand_model', 'brand');
        $this->controller = get_class();


        $this->Food = [
            ['index' => '1', 'value' => "Allowance"],
            ['index' => '2', 'value' => "Provided"],
            ['index' => '3', 'value' => "Not Provided"],
            ['index' => '4', 'value' => "Free"],
            ['index' => '5', 'value' => "----"]
        ];
        $this->Accommodation = [
            ['index' => '1', 'value' => "Allowance"],
            ['index' => '2', 'value' => "Provided"],
            ['index' => '3', 'value' => "Not Provided"],
            ['index' => '4', 'value' => "Free"],
            ['index' => '5', 'value' => "----"]
        ];
        $this->Medical = [
            ['index' => '1', 'value' => "Allowance"],
            ['index' => '2', 'value' => "Provided"],
            ['index' => '3', 'value' => "Not Provided"],
            ['index' => '4', 'value' => "Free"],
            ['index' => '5', 'value' => "----"]
        ];
        $this->AirTicket = [
            ['index' => '1', 'value' => "One Way"],
            ['index' => '2', 'value' => "Both Way"],
            ['index' => '3', 'value' => "Free"],
            ['index' => '4', 'value' => "Not Provided"],
            ['index' => '5', 'value' => "----"]
        ];
        $this->ContractYear = [
            ['index' => '1', 'value' => "One Year"],
            ['index' => '2', 'value' => "2 Years"],
            ['index' => '3', 'value' => "3 Years"],
            ['index' => '4', 'value' => "4 Years"],
            ['index' => '5', 'value' => "5 Years"],
            ['index' => '6', 'value' => "6 Years"],
            ['index' => '7', 'value' => "7 Years"],
            ['index' => '8', 'value' => "8 Years"],
            ['index' => '9', 'value' => "9 Years"],
            ['index' => '10', 'value' => "10 Years"]
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


        $this->form_validation->set_rules("form[VacancyTitle]", "Vacancy Title", "required");
        $this->form_validation->set_rules("form[CountryId]", "Country Name", "required");
        $this->form_validation->set_rules("form[Salary]", "Salary", "required");
        $this->form_validation->set_rules("form[ShortDescription]", "Short Description", "required");
        $this->form_validation->set_rules("form[Description]", "Description", "required");


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
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Product Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
                $this->db->trans_commit();
            }

            redirect(current_url());
        }

//        $d['categories'] = $this->category->get_all();
        $d['countries'] = $this->country->get_all();
        $d['foods'] = $this->Food;
        $d['accommodations'] = $this->Accommodation;
        $d['medicals'] = $this->Medical;
        $d['airTickets'] = $this->AirTicket;
        $d['contractYears'] = $this->ContractYear;

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
            'records' => $this->model->join('country')
                ->fields("vacancy.*,country.CountryId, CountryTitle   ")
                ->get_all()
//            'records' => $this->model->get_all()
        ];//        p($d['records'])
        ;
//        echo $this->db->last_query();
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