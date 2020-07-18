<?php

class Migration_Alter_table_packages extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "URL" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ];

        $this->dbforge->add_column('packages', $fields);

    }

    public function down()
    {
        $this->dbforge->drop_column('packages', 'URL');
    }

}