<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use SebastianBergmann\Type\Type;

class Orang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],

			'created_at' => [
				'Type'		=> 'DATETIME',
				'null'		=> true

			],
			'updated_at' => [
				'Type'		=> 'DATETIME',
				'null'		=> true

			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('orang');
	}

	public function down()
	{
		$this->forge->dropTable('orang');
	}
}
