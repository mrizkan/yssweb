<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/18/2016
 * Time: 10:49 AM
 */
class Brand extends Front_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model', 'product');
//        $this->load->model('Category_model', 'category');
//        $this->load->model('Subcategory_model', 'subcategory');

        $this->load->model('Brand_model', 'brand');

        $this->load->helper("url");
        $this->load->library('pagination');

        $this->load->helper('download');


    }


    function index()
    {
        $d['brands1'] = $this->brand->order_by('Order', 'ASC')->get_all();
//        p($this->db->last_query());
        $this->view('brands', $d);


    }


    function brand_category($CategoryId)
    {

//        p($CategoryId);

        $d['total_count'] = $this->product->count_by(['BrandId' => $CategoryId]);
//        p($this->db->last_query());
        $d['one_brand'] = $this->brand->get($CategoryId);
//        p($this->db->last_query());
        $d['count'] = $this->product->get_many_by(['BrandId' => $CategoryId]);
        $d['one_brand'] = $this->brand->get($CategoryId);
//        $d['category_list'] = $this->category->order_by("Order", "ASC")->get_all();


//        ============================================================================
        $config["base_url"] = base_url() . "Brand/" . url_title($this->uri->segment(2)) . '/' . $d['one_brand']->BrandId;
        $config["total_rows"] = $this->product->count_by(['BrandId' => $CategoryId]);

        $config["per_page"] = 8;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] = '<li>';
        $config["num_tag_close"] = '</li>';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_tag_open"] = '<li>';
        $config["prev_tag_close"] = '</li>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;

        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"], ($page - 1) * 8)->get_many_by(['BrandId' => $CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['pages'] = round($choice);

        $d['main_cate'] = ' <li><a href=""> ' . $d['one_brand']->BrandTitle . ' </a></li>';
        $d['main_cate_sub'] = '';

        $d['link'] = "";

//        p($this->db->last_query());
//        p($this->uri->segment(3));
//        p($d['total_count']);

        $this->view('brand', $d);
//        $this->view('product');


    }


}