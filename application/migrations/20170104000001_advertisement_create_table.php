<?php

class Migration_Advertisement_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "AddId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "LocationId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "AddTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "AddURL" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Image" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ShortDescription" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Description" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CreatedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedDate" => [
                'type' => 'DATETIME'
            ],
            "ModifiedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "ModifiedDate" => [
                'type' => 'TIMESTAMP'
            ],
            "IsDeleted" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1
            ],
            "Order" => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('AddId', TRUE);
        $this->dbforge->create_table('advertisement', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('advertisement', TRUE);
    }

}