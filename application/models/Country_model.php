<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/17/2016
 * Time: 10:47 AM
 */
class Country_model extends MY_Model
{
    var $_table = "country",
        $primary_key = "CountryId";
//        $soft_delete_key = 'country.IsDeleted';

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

}