<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 11/7/2016
 * Time: 11:09 AM
 */
class Vacancies extends Front_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Vacancy_model', 'vacancy');
        $this->load->model('Country_model', 'country');
        $this->load->model('Blog_model', 'blog');

        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library('pagination');

//        $this->load->helper("form");


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

    function index()
    {
        $d['count'] = $this->blog->count_by([]);
//        p($this->db->last_query());
//        $d['one_category'] = $this->category->get($CategoryId);->get_many_by(['Color'=>'2'])
//        $d['vacancies'] = $this->vacancy->order_by("Order", "ASC")->get_all();
        $d['vacancies'] = $this->vacancy->join('country')
            ->fields("{$this->vacancy->table()}.* , country.CountryId,CountryTitle,Image ")->order_by("Order", "ASC")
            ->get_all();

//    p($this->db->last_query());

//        ============================================================================
        $config["base_url"] = base_url() . "Blog-Detail/";
        $config["total_rows"] = $this->blog->count_by([]);
//        p($this->db->last_query());
        $config["per_page"] = 8;
        $config["uri_segment"] = 2;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active" > <a href="#" >';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] = '<li>';
        $config["num_tag_close"] = '</li>';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';

        $config["prev_tag_open"] = '<li>';
        $config["prev_tag_close"] = '</li>';

        $config['next_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
        $config['prev_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;


        $d['blogs'] = $this->blog->order_by("Order", "ASC")->limit($config["per_page"], ($page - 1) * 5)->get_all();
//        $d['projects'] = $this->news->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*8)->get_many_by(['Color'=>'2']);

//        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*16)->get_many_by(['CategoryId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['link'] = "";
//        p($this->db->last_query());
//        p($d['count']);
        $d['countries'] = $this->country->get_all();
        $d['foods'] = $this->Food;
        $d['accommodations'] = $this->Accommodation;
        $d['medicals'] = $this->Medical;
        $d['airTickets'] = $this->AirTicket;
        $d['contractYears'] = $this->ContractYear;

        $this->view('vacancy', $d);

//        $this->load->view('on_project');

    }

    function details($id)
    {
//        $d['one_vacancy'] = $this->vacancy->get($id);
        $d['one_vacancy'] = $this->vacancy->join('country')
            ->fields("{$this->vacancy->table()}.* , country.CountryId,CountryTitle,Image ")->get($id);
//        $d['one_blog'] = $this->blog->get($id);
//        p($this->db->last_query());

//            echo $id;
        $d['foods'] = $this->Food;
        $d['accommodations'] = $this->Accommodation;
        $d['medicals'] = $this->Medical;
        $d['airTickets'] = $this->AirTicket;
        $d['contractYears'] = $this->ContractYear;

        $this->view('v_details', $d);
//        $this->view('v_details');
    }

    function apply($id)
    {

        $d['one_vacancy'] = $this->vacancy->get($id);

        if ($this->input->post()) {
            $this->form_validation->set_rules('form[UserName]', 'Your Name', 'required');
            $this->form_validation->set_rules('form[UserTelephone]', 'Your Telephone', 'required|numeric');
            $this->form_validation->set_rules('form[UserEmail]', 'Your Email', 'required|valid_email');


            if ($this->form_validation->run()) {

                $config['upload_path'] = './media/app/';
                $config['allowed_types'] = 'doc|pdf|odt|docx|zip';
                $config['max_size'] = 3072;
                $config['file_name'] = time();

                $this->load->library('upload', $config);


                $post = $this->input->post('form');
                $post['CreatedDate'] = date("Y-m-d h:i:s");

                $this->db->trans_begin();
                if ($this->upload->do_upload('userfile') == true) {
                    $post['file'] = $this->upload->data('file_name');

                    $this->db->insert('application', $post);

                    if ($this->db->trans_status() === FALSE) {
                        $this->db->trans_rollback();
                        $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' . ' Error ! Check again . Thanks. </strong>']);
                    } else {
                        $this->db->trans_commit();
                        $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Your message was sent successfully. Thanks. ' . '</strong>']);

                        $this->load->library('email');
                        $config['mailtype'] = 'html';

                        $this->email->initialize($config);
                        $this->email->to(email);
                        $this->email->from($this->input->post('form[UserEmail]'), $this->input->post('form[UserName]'));
                        $this->email->subject(TITLE . " - Apply Vacancy");
                        $this->email->attach('./media/app/' . $post['file']);
                        $msg = '<html><body>';
                        $msg .= '<img src="' . base_url() . 'media/images/logo.jpg" alt="' . TITLE . '" />';
                        $msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                        $msg .= "<tr style='background: #eee;'><td><strong>Your Name:</strong> </td><td>" . strip_tags($this->input->post('form[UserName]')) . "</td></tr>";
                        $msg .= "<tr><td><strong>Your Telephone:</strong> </td><td>" . strip_tags($this->input->post('form[UserTelephone]')) . "</td></tr>";
                        $msg .= "<tr><td><strong>Your Email:</strong> </td><td>" . strip_tags($this->input->post('form[UserEmail]')) . "</td></tr>";

                        $msg .= "<tr><td><strong>Applied Vacancy:</strong> </td><td>" . strip_tags($this->input->post('form[vname]')) . "</td></tr>";

                        $msg .= "</table>";
                        $msg .= "</body></html>";

                        $this->email->message($msg);
                        $this->email->send();
                    }

                } else {
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' . ' Error ! Invalid file type . Thanks. </strong>']);

                }

                redirect(current_url());

            }

        }

//            echo $id;
        $this->view('v_apply', $d);
//        $this->view('v_apply');
    }

}