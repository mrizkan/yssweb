<?php

class Slider_model extends MY_Model
{


    var $_table = "slider",
        $primary_key = "SliderId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];
}