<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/17/2016
 * Time: 10:47 AM
 */
class Garments_model extends MY_Model
{
    var $_table = "garment",
        $primary_key = "GarmentId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $has_one = [
        'category' => ['CategoryId', 'CategoryId'],
        'sub_category' => ['SubCategoryId', 'SubCategoryId', 'LEFT'],
        'brand' => ['BrandId', 'BrandId']
    ];
}