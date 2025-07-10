<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventory extends Migration
{
    public function up()
    {
        //user
        $this->forge->addField([
            'UserID' => [
            'type'              => 'INT',
            'null'              => false,
            'auto_increment'    => true
            ],
            'Username' => [
            'type'              => 'VARCHAR',
            'null'              => false,
            'constraint'        => '50'
            ],
            'Email' => [
            'type'              => 'VARCHAR',
            'null'              => false,
            'constraint'        => '100'
            ],
            'Password' =>[
            'type'          => 'VARCHAR',
            'null'          => false,
            'constraint'    => '100'
            ],
            'Firstname' => [
            'type'              => 'VARCHAR',
            'null'              => false,
            'constraint'        => '50'
            ],
            'lastname' => [
            'type'              => 'VARCHAR',
            'null'              => false,
            'constraint'        => '50'
            ],
            
        ]);

        $this->forge->addPrimaryKey('UserID');
        $this->forge->createTable('Users');


        // product
        $this->forge->addField([
            'ProductID' => [
            'type'              => 'INT',
            'null'              => false,
            'auto_increment'    => true
            ],
            'ProductName' => [
            'type'              => 'VARCHAR',
            'null'              => false,
            'constraint'        => '255'
            ],
            'Description' => [
            'type'              => 'TEXT',
            ],
            'Price' =>[
            'type'          => 'DECIMAL',
            'null'          => false,
            'constraint'    => '10,2'
            ],
            'Category' => [
            'type'              => 'TEXT'
            ],
            'StockQuantity' => [
            'type'              => 'INT',
            'null'              => false,
            'default'           =>  0
            ],
            'Image' => [
            'type'          => 'TEXT',
            'null'          => false,
            'constrain'     => true,
            'length'        => 255,
            'default'       => NULL
            ],
            
        ]);

        $this->forge->addPrimaryKey('ProductID');
        $this->forge->createTable('Products');

        //orders
        $this->forge->addField([
            'OrderID' => [
                'type'              => 'INT',
                'null'              => false,
                'auto_increment'    => true
            ],
            'OrderDate' => [
                'type'              => 'DATE',
                'null'              => false,
            ],
            'ProductID' => [
                'type'              => 'TEXT',
                'null'              => false,
            ],
            'Price' =>[
                'type'          => 'DECIMAL',
                'null'          => false,
                'constraint'    => '10,2'
            ],
            'Status' => [
                'type'              => 'VARCHAR',
                'default'           => 'Pending',
                'constraint'        => '50'    
            ],
                'TotalQuantity' => [
                'type'              => 'INT',
                'default'           =>  0,
                'null'              => false
            ],
            
        ]);

        $this->forge->addPrimaryKey('OrderID');
        $this->forge->createTable('Orders');
    }

    
    public function down()
    {
        $this->forge->dropTable('Users');
        $this->forge->dropTable('Products');
        $this->forge->dropTable('Orders');
    }
}
