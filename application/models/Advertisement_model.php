<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/17/2016
 * Time: 10:47 AM
 */
class Advertisement_model extends MY_Model
{
    var $_table = "advertisement",
        $primary_key = "AddId";
//        $soft_delete_key = 'vacancy.IsDeleted';

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

//    var $has_one = [
//        'category' => ['CategoryId', 'CategoryId'],
//        'country' => ['CountryId', 'CountryId'],
//        'brand' => ['BrandId', 'BrandId']
//    ];
}