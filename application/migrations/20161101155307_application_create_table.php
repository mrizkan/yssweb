<?php

class Migration_Application_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "ApplicationId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "vid" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "vname" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "UserName" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "UserTelephone" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "UserEmail" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "file" => [
                'type' => 'VARCHAR',
                'constraint' => 255
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
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('ApplicationId', TRUE);
        $this->dbforge->create_table('application', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('application', TRUE);
    }

}