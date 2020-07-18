<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/17/2016
 * Time: 10:47 AM
 */
class Brand_model extends MY_Model
{
    var $_table = "brand",
        $primary_key = "BrandId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

}