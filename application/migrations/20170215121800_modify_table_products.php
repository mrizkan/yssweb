<?php

class Migration_Modify_table_products extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = array(
            'Description' => array(
                'name' => 'Description',
                'type' => 'TEXT',
            ),
        );
        $this->dbforge->modify_column('product', $fields);
    }


}