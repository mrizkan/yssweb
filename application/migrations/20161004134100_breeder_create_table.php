<?php

class Migration_Breeder_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "BreederId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "BreederTitle" => [
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
            "MoreImage" => [
                'type' => 'TEXT'
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
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('BreederId', TRUE);
        $this->dbforge->create_table('breeder', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('breeder', TRUE);
    }

}