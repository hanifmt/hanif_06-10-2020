<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'siswa_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'siswa_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'siswa_alamat'       => [
				'type'           => 'TEXT',
				'constraint'     => '',

			],
			'siswa_kecamatan_id'       => [
					'type'           => 'INT',
					'constraint'     => '100',
			],
			'siswa_kabupaten_id' => [
					'type'			 => 'INT',
					'constraint'     => 11,	
			],

		]);
		$this->forge->addKey('siswa_id', TRUE);
		$this->forge->createTable('siswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('siswa');
	}
}
