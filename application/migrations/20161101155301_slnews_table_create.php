<?php

class Migration_SlNews_table_create extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "SlNewsId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "SlNewsTitle" => [
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
            "VideoEmbedCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Description" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "MoreImage" => [
                'type' => 'TEXT'
            ],
            "EventDate" => [
                'type' => 'Date'
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
                'default' => 0
            ],
            "Location" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Order" => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('SlNewsId', TRUE);
        $this->dbforge->create_table('slnews', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('slnews', TRUE);
    }

}