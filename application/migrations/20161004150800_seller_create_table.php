<?php


class Migration_Seller_create_table extends CI_Migration
{


    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "SellerId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "BreederId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "Title" => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            "SellerTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Email" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Telephone" => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            "Address" => [
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
                'default' => 0
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('SellerId', TRUE);
        $this->dbforge->create_table('seller', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('seller', TRUE);
    }

}