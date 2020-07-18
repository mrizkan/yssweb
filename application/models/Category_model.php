<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/17/2016
 * Time: 10:47 AM
 */
class Category_model extends MY_Model
{
    var $_table = "category",
        $primary_key = "CategoryId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $has_many = [
        'sub' => ['model' => 'Subcategory_model', 'primary_key' => 'CategoryId'],
        'product' => ['model' => 'Product_model', 'primary_key' => 'CategoryId']
    ];


}