<?php

class Migration_Winner_dog_table_create extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "WinnerId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "WinnerTitle" => [
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
        $this->dbforge->add_key('WinnerId', TRUE);
        $this->dbforge->create_table('winner_dogs', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('winner_dogs', TRUE);
    }

}