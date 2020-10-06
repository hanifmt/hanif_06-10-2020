<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kabupaten extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'kabupaten_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'kabupaten_name'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
		]);
		$this->forge->addKey('kabupaten_id', TRUE);
		$this->forge->createTable('kabupaten');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('kabupaten');
	}
}
