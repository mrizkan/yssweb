<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Packages extends MY_Controller
{
    var $page = "packages";
    var $img_width = 400;
    var $img_height = 400;

    function __construct()
    {
        parent::__construct();
//        $this->load->model('Product_model', 'model');
        $this->load->model('Packages_model', 'model');
        $this->load->model('Media_company_model', 'company');
        $this->load->model('Channel_Tag_model', 'channelTag');
        $this->load->model('Channel_model', 'channel');
        $this->load->model('Category_model', 'category');
        $this->load->model('Brand_model', 'brand');
        $this->load->model('Subcategory_model', 'sub_cate');
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
        $this->form_validation->set_rules("form[PackagesTitle]", "Packages Title", "required");
        $this->form_validation->set_rules("form[Price]", "Price", "required|numeric");
        $this->form_validation->set_rules("form[MediaComId]", "Service Provider Name", "required");
//        $this->form_validation->set_rules("form[ModelNumber]", "Model Number", "required");
//        $this->form_validation->set_rules("form[SerialNumber]","Serial Number","required");
//        $this->form_validation->set_rules("form[PriceRangeTo]", "Price Range (To)", "required");
//        $this->form_validation->set_rules("form[PriceRangeFrom]", "Price Range (From)", "required");
//        $this->form_validation->set_rules("form[Color]", "Color", "required");

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
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Product Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
                $this->db->trans_commit();
            }

            redirect(current_url());
        }

        $d['categories'] = $this->category->get_all();
        $d['brands'] = $this->brand->get_all();
        $d['companies'] = $this->company->get_all();


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
//            'records' => $this->model->join('category')->join('sub_category')
//                ->fields("{$this->model->table()}.* , CategoryTitle,{$this->sub_cate->table()}.SubCategoryTitle ")
//                ->get_all()
            'records' => $this->model->join('mediacom')
                ->fields("{$this->model->table()}.* , MediaComTitle")
                ->get_all()
//            'records' => $this->model->limit(18)->get_all()
        ];
//        p($this->db->last_query());exit;
        $this->view($d);
    }

    function delete($_id = 0)
    {
        $this->model->delete($_id);
        redirect(base_url("admin/$this->controller"));
    }


    function getSubCategory()
    {
        $d = [
            'records' => $this->db->from('sub_category')->where('CategoryId = ' . $this->input->post('id') . '')->get()->result_array()
        ];

        echo json_encode($d['records']);
    }

    function rearrange()
    {

        $d = [
            'page' => "$this->page/rearrange",
//            'records' => $this->model->join('category')->join('sub_category')
//                ->fields("{$this->model->table()}.* , CategoryTitle,{$this->sub_cate->table()}.SubCategoryTitle")->order_by("Order", "ASC")
//                ->get_all()
            'records' => $this->model->join('mediacom')
                ->fields("{$this->model->table()}.* , MediaComTitle")->order_by("Order", "ASC")
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

    function add_channel($_id)
    {


        $input = $this->input->post('ChannelList');

        $d = [
            'page' => "$this->page/add_channel",
            'objData' => $this->model->get($_id)
        ];

        $result = $this->search_package_channel($_id);
        $tag = 0;
        foreach ($result as $row) {
            if ($tag != $row->ChannelTagId) {
                $tag = $row->ChannelTagId;
            }

            $d['obj'][$tag][] = $row->ChannelId;
        }

        $d['channelTags'] = $this->channelTag->order_by("Order", "ASC")->get_all();
        $d['channels'] = $this->channel->order_by("Order", "ASC")->get_all();


        if (isset($input)) {
            foreach ($input as $TagId => $channelList) {
                foreach ($channelList as $ChannelId):
                    $data[] = [
                        'PackagesId' => $_id,
                        'ChannelTagId' => $TagId,
                        'ChannelId' => $ChannelId
                    ];
                endforeach;
            }
        }

        if (isset($data)) {
            $this->delete_package_channel($_id);   //before save data delete all data where package_id
            $this->save_package_channels($data);   // save data
        }
        $this->_form($d, $_id);

    }

    function search_package_channel($_id)
    {
        $where = 'PackagesId=' . $_id;
        $result = $this->db->get_where('package_tag_channel', $where)->result();
//        p($this->db->last_query());
        return $result;

    }

    function delete_package_channel($_id)
    {
        $this->db->trans_begin();
        $this->db
            ->where_in('PackagesId', $_id)
            ->delete('package_tag_channel');

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
//            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' .  'Failure !!! </strong>']);
        } else {
            $this->db->trans_commit();
//            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Channel successfully . '  . '</strong>']);

        }

    }

    function save_package_channels($data)
    {
        $this->db->trans_begin();
        $this->db->insert_batch('package_tag_channel', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' . 'Channel added Failure !!! </strong>']);
        } else {
            $this->db->trans_commit();
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Channel added successfully . ' . '</strong>']);

        }

    }


}