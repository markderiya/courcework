<?php
//
//namespace App\Database\Migrations;
//
//use CodeIgniter\Database\Migration;
//
//class WalletDb extends Migration
//{
//    public function up()
//    {
//        $this->forge->addField([
//            'id' => [
//                'type' => 'INT',
//                'constraint' => 11,
//                'unsigned' => true,
//                'auto_increment' => true,
//            ],
//            'name_wallet' => [
//                'type' => 'VARCHAR',
//                'constraint' => 100,
//                'unique' => true,
//            ],
//            'user_id' => [
//                'type' => 'INT',
//                'unsigned' => true,
//            ],
//        ]);
//
//        $this->forge->addKey('id', true);
//
//        $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'CASCADE');
//
//        $this->forge->createTable('wallet');
//    }
//
//    public function down()
//    {
//        $this->forge->dropTable('wallet');
//    }
//}


//namespace App\Database\Migrations;
//
//use CodeIgniter\Database\Migration;
//
//class WalletDb extends Migration
//{
//    public function up()
//    {
//        $this->forge->addField([
//            'id' => [
//                'type' => 'INT',
//                'constraint' => 11,
//                'unsigned' => true,
//                'auto_increment' => true,
//            ],
//            'Type' => [
//                'type' => 'VARCHAR',
//                'constraint' => 100,
//                'unique' => true,
//            ],
//            'Data' => [
//                'type' => 'DATETIME',
//            ],
//            'wallet_id' => [
//                'type' => 'INT',
//                'unsigned' => true,
//            ],
//        ]);
//
//        $this->forge->addKey('id', true);
//
//        $this->forge->addForeignKey('wallet_id', 'wallet', 'id', 'CASCADE', 'CASCADE');
//
//        $this->forge->createTable('income');
//    }
//
//    public function down()
//    {
//        $this->forge->dropTable('income');
//    }
//}

//
//namespace App\Database\Migrations;
//
//use CodeIgniter\Database\Migration;
//
//class WalletDb extends Migration
//{
//    public function up()
//    {
//        $this->forge->addField([
//            'id' => [
//                'type' => 'INT',
//                'constraint' => 11,
//                'unsigned' => true,
//                'auto_increment' => true,
//            ],
//            'Type' => [
//                'type' => 'VARCHAR',
//                'constraint' => 100,
//                'unique' => true,
//            ],
//            'Data' => [
//                'type' => 'DATETIME',
//            ],
//            'wallet_id' => [
//                'type' => 'INT',
//                'unsigned' => true,
//            ],
//        ]);
//
//        $this->forge->addKey('id', true);
//
//        $this->forge->addForeignKey('wallet_id', 'wallet', 'id', 'CASCADE', 'CASCADE');
//
//        $this->forge->createTable('expenses');
//    }
//
//    public function down()
//    {
//        $this->forge->dropTable('expenses');
//    }
//}


//namespace App\Database\Migrations;
//
//use CodeIgniter\Database\Migration;
//
//class WalletDb extends Migration


//
//namespace App\Database\Migrations;
//
//use CodeIgniter\Database\Migration;
//
//class CategoryDb extends Migration
//{
//    public function up()
//    {
//        $this->forge->addField([
//            'id' => [
//                'type' => 'INT',
//                'constraint' => 11,
//                'unsigned' => true,
//                'auto_increment' => true,
//                'primary' => true,
//            ],
//            'cloth' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'present' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'pharmacy' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'animals' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'trips' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'food' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'cafe' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'deli' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'connection' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'taxi' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'sport' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'cosmetics' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'auto' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'house' => [
//                'type' => 'TEXT',
//                'constraint' => 100,
//            ],
//            'wallet_id' => [
//                'type' => 'INT',
//                'unsigned' => true,
//            ],
//        ]);
//        $this->forge->addKey('id', true);
//        $this->forge->addForeignKey('wallet_id', 'wallet', 'id','CASCADE', 'CASCADE');
//        $this->forge->createTable('category');
//    }
//
//    public function down()
//    {
//        $this->forge->dropTable('category');
//    }
//}


namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryDb extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
                'primary' => true,
            ],
            'name_cat' => [
                'type' => 'TEXT',
                'constraint' => 100,
            ],
            'wallet_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('wallet_id', 'wallet', 'id', 'CASCADE', 'CASCADE'); // Подставьте актуальное имя связанной таблицы и поля

        $this->forge->createTable('category');
    }

    public function down()
    {
        $this->forge->dropTable('category');
    }
}







//php spark migrate  - прописать в терменале
