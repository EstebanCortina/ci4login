<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'userId' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'userName' => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'email' => [
        'type' => 'VARCHAR',
        'constraint' => '100',
        'null' => false,
      ],
      'password' => [
        'type' => 'VARCHAR',
        'constraint' => '100',
        'null' => false,
      ],
    ]);
    $this->forge->addKey('userId', true);
    $this->forge->createTable('users');
  }

  public function down()
  {
    $this->forge->dropTable('users');
  }
}
