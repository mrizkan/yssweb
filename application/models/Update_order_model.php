<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/20/2016
 * Time: 12:04 PM
 */
class Update_order_model extends CI_Model
{

    function update_order()
    {


        $updateRecordsArray = $this->input->post('conid');
        $table = $this->input->post('table');
        $listingCounter = 1;
//
        foreach ($updateRecordsArray as $recordIDValue) {
            $data = array('Order' => $listingCounter);

            $this->db->update($table, $data, "{$this->input->post('id')}=$recordIDValue");
            $listingCounter++;
        }


//        $updateRecordsArray = $this->input->post('conid');
//        $table = $this->input->post('table');
//        $listingCounter = 1;
////
//        foreach ($updateRecordsArray as $recordIDValue) {
//            $data = array('Order' => $listingCounter);
//
//            $this->db->update($table,$data,"id=$recordIDValue");
//            $listingCounter++;
//        }

    }

}