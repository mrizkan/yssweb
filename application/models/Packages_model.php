<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/17/2016
 * Time: 10:47 AM
 */
class Packages_model extends MY_Model
{
    var $_table = "packages",
        $primary_key = "PackagesId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $has_one = [
        'category' => ['CategoryId', 'CategoryId'],
        'sub_category' => ['SubCategoryId', 'SubCategoryId'],
        'brand' => ['BrandId', 'BrandId'],
        'mediacom' => ['MediaComId', 'MediaComId'],
    ];


}