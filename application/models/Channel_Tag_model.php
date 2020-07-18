<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/17/2016
 * Time: 10:47 AM
 */
class Channel_Tag_model extends MY_Model
{
    var $_table = "channeltag",
        $primary_key = "ChannelTagId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $has_many = [
        'Packages' => ['model' => 'Packages_model', 'primary_key' => 'MediaComId'],
        'channels' => ['model' => 'Channel_model', 'primary_key' => 'ChannelId']
    ];

}