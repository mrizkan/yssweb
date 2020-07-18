<?php

class Migration_Vacancy_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "VacancyId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "CountryId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "Salary" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Food" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Accommodation" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Medical" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "AirTicket" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ContractYear" => [
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
        $this->dbforge->add_key('VacancyId', TRUE);
        $this->dbforge->create_table('vacancy', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('vacancy', TRUE);
    }

}