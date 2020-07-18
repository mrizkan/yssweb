<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/26/2016
 * Time: 2:25 PM
 */
class Events extends Front_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Events_model', 'event');

        $this->load->helper("url");
        $this->load->library('pagination');


    }


    function index()
    {


        $d['count'] = $this->event->count_by([]);
//        $d['one_category'] = $this->category->get($CategoryId);
        $d['events'] = $this->event->order_by("Order", "ASC")->get_all();

//    p($this->db->last_query());

//        ============================================================================
        $config["base_url"] = base_url() . "News-Events/";
        $config["total_rows"] = $this->event->count_by([]);

        $config["per_page"] = 5;
        $config["uri_segment"] = 2;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active" > <a href="#" >';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] = '<li  >';
        $config["num_tag_close"] = '</li>';
        $config["next_tag_open"] = '<li  >';
        $config["next_tag_close"] = '</li>';

        $config["prev_tag_open"] = '<li  >';
        $config["prev_tag_close"] = '</li>';

        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;


        $d['events'] = $this->event->order_by("Order", "ASC")->limit($config["per_page"], ($page - 1) * 5)->get_all();

//        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*16)->get_many_by(['CategoryId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['link'] = "";
//        p(($page));

//        p($this->db->last_query());
//        p($this->uri->segment(2));
//        p($CategoryId);

//        $this->view('product',$d);
        $this->view('news_events', $d);


    }

    function detail($ProductId)
    {
//        echo $ProductId;
        $d['details'] = $this->event->get($ProductId);
//        $d['category_list'] = $this->category->get_all();
//        $d['one_category'] = $this->category->get($d['details']->CategoryId);
//        $d['related_products'] = $this->product->get_all($d['details']->CategoryId);
//        $d['related_products'] = $this->product->limit(5)->order_by('rand()')->get_many_by(['CategoryId'=>$d['details']->CategoryId]);
//        p($this->db->last_query());


//        p($d['details']);

        $this->view('detail', $d);
    }

}