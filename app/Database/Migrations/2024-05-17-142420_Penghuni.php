<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penghuni extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel penghuni
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'blok'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 10
			],
			'pemilik'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100
			],
			'ipl' => [
				'type'           => 'INT',
				'constraint'     => 15,
			],
			'keterangan' => [
				'type'           => 'TEXT',
				'null'           => true,			
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel penghuni
		$this->forge->createTable('penghuni', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel penghuni
		$this->forge->dropTable('penghuni');
	}


}
