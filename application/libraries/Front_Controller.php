<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 5/4/2016
 * Time: 3:34 PM
 */
class Front_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        if (!defined('IMG')) define('IMG', base_url('images') . "/");
        if (!defined('UP')) define('UP', base_url('uploads') . "/");
        if (!defined('UPT')) define('UPT', base_url('uploads/thumbs') . "/");
    }

    function view($page, $data = [])
    {
        $this->load->model('Brand_model', 'brand');
        $data['brands'] = $this->brand->order_by("Order", "ASC")->limit(7)->get_all();

        $this->load->model('Events_model', 'event');
        $data['events'] = $this->event->order_by("Order", "ASC")->limit(3)->get_all();

        $this->load->model('Sri_lanka_News_model', 'slnews');
        $data['sl_news'] = $this->slnews->order_by("Order", "ASC")->limit(5)->get_all();

        $this->load->model('Category_model', 'category');
        $data['categories'] = $this->category->order_by("Order", "ASC")->get_all();
        $data['categories_menu'] = $this->category->order_by("Order", "ASC")->get_all();


        $this->load->model('Subcategory_model', 'subcategory');
        $data['menu'] = $this->category->with('sub')->order_by("Order", "ASC")->limit(10)->get_all();

        $this->load->model('Advertisement_model', 'addz');
        $data['home_addz_01'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=1');
        $data['home_addz_02'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=2');
        $data['home_addz_03'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=3');
        $data['home_addz_04'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=4');
        $data['home_addz_05'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=5');
        $data['home_addz_06'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=6');
        $data['home_addz_07'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=7');
        $data['home_addz_08'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=8');
        $data['home_addz_09'] = $this->addz->limit(1)->order_by("AddId", "DESC")->get_by('LocationId=9');

//        p($data['menu'] );
        $this->load->view($page, $data);
    }


}