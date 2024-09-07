<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Iuran extends Migration
{

	public function up()
	{
		// Membuat kolom/field untuk tabel iuran
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'idpenghuni'       => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'thbl'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 10
			],
			'isbayar'      => [
				'type'           => 'ENUM',
				'constraint'     => ['0', '1'],
				'default'        => '0',
			],
			'keterangan' => [
				'type'           => 'TEXT',
				'null'           => true,			
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel iuran
		$this->forge->createTable('iuran', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel iuran
		$this->forge->dropTable('iuran');
	}

}
