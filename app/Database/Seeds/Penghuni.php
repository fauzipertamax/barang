<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Penghuni extends Seeder
{
	public function run()
	{
		// membuat data
		$penghuni_data = [
			[ 'blok' => 'A/1', 'pemilik'  => 'Lusiana Karto', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/2', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/3', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/5', 'pemilik'  => 'Fendi Chen', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/6', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/7', 'pemilik'  => 'Fredy', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/8', 'pemilik'  => 'Agustina', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/9', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/10', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/11', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/12', 'pemilik'  => 'Husin', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/15', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'A/16', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'B/1', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/2', 'pemilik'  => 'Sugianto Alun', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/3', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/5', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/6', 'pemilik'  => 'Yang Lian', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/7', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/8', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/9', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'B/10', 'pemilik'  => 'RT', 'ipl' => '0', 'keterangan' => ''],
			[ 'blok' => 'B/11', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/12', 'pemilik'  => 'Dewi', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/15', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/16', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/17', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/18', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/19', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/20', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'B/21', 'pemilik'  => 'Andreas', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'C/1', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'C/2', 'pemilik'  => 'Sinta Dewi', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'C/3', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'C/5', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],	
			[ 'blok' => 'D/1', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/2', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/3', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/5', 'pemilik'  => 'Fendy', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/6', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/7', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/8', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/9', 'pemilik'  => 'Chong Johny', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/10', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/11', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/12', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/15', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/16', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/17', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/18', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/19', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/20', 'pemilik'  => 'RT', 'ipl' => '0', 'keterangan' => ''],
			[ 'blok' => 'D/21', 'pemilik'  => 'Yanti', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/22', 'pemilik'  => 'Felina', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/23', 'pemilik'  => 'Alex', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/25', 'pemilik'  => 'Rosmawati', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/25', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/27', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/28', 'pemilik'  => 'Indra Liem', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/29', 'pemilik'  => 'Budi Harmin', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/30', 'pemilik'  => 'Yunita Mulias', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/31', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/32', 'pemilik'  => 'Elisabet Sutio', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'D/33', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/1', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/2', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/3', 'pemilik'  => 'Sumarno', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/5', 'pemilik'  => 'Lyhsen', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/6', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/7', 'pemilik'  => 'Herianto', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/8', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/9', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/10', 'pemilik'  => 'Edwin', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/11', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/12', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/15', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'E/16', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'F/1', 'pemilik'  => 'Bing Hun', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/2', 'pemilik'  => 'Suatno', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/3', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],		
			[ 'blok' => 'F/5', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/6', 'pemilik'  => 'Hendra', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/7', 'pemilik'  => 'Sandy Djuanda', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/8', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/9', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/10', 'pemilik'  => 'Danil', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/11', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'F/12', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],		
			[ 'blok' => 'F/15', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'F/16', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'F/17', 'pemilik'  => 'Michael Fulton', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'F/18', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'F/19', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'F/20', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'F/21', 'pemilik'  => 'Herman Jap', 'ipl' => '450000', 'keterangan' => ''],		
			[ 'blok' => 'G/1', 'pemilik'  => 'Tommy', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'G/2', 'pemilik'  => 'Theresa Lesmana', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'G/3', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'G/5', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'G/6', 'pemilik'  => 'Elisabet Sutio', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'G/7', 'pemilik'  => 'Rhesa Gunawan', 'ipl' => '500000', 'keterangan' => ''],		
			[ 'blok' => 'H/1', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/2', 'pemilik'  => 'Roni', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/3', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],		
			[ 'blok' => 'H/5', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/6', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/7', 'pemilik'  => 'Sumandi', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/8', 'pemilik'  => 'Vony', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/9', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/10', 'pemilik'  => '-', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/11', 'pemilik'  => 'Lim Teddy', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/12', 'pemilik'  => 'Lim Bahari', 'ipl' => '400000', 'keterangan' => ''],			
			[ 'blok' => 'H/15', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/16', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/17', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/18', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/19', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/20', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/21', 'pemilik'  => 'Edwin Wirawan', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/22', 'pemilik'  => 'Bayar 1 th', 'ipl' => '400000', 'keterangan' => ''],
			[ 'blok' => 'H/23', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],			
			[ 'blok' => 'H/25', 'pemilik'  => 'Ade Suhendi', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'H/26', 'pemilik'  => '-', 'ipl' => '450000', 'keterangan' => ''],
			[ 'blok' => 'RA/1', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/2', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/3', 'pemilik'  => 'Ayu Puspita', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/5', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/6', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/7', 'pemilik'  => 'Yohan', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/8', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/9', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/10', 'pemilik'  => 'Enggar', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/11', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/12', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/15', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/16', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RA/17', 'pemilik'  => 'Nugroho', 'ipl' => '500000', 'keterangan' => ''],	
			[ 'blok' => 'RB/1', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/2', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/3', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/5', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/6', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/7', 'pemilik'  => 'Asia Electronic', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/8', 'pemilik'  => 'Asia Electronic', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/9', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/10', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/11', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/12', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/15', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/16', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/17', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/18', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/19', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/20', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/21', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/22', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/23', 'pemilik'  => 'Nico Devista', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/25', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/26', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RB/27', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],		
			[ 'blok' => 'RC/1', 'pemilik'  => 'Alfa', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/2', 'pemilik'  => 'Alfa', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/3', 'pemilik'  => 'Hadi Hidayat', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/5', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/6', 'pemilik'  => 'Yanti', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/7', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/8', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/9', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/10', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/11', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/12', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/15', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/16', 'pemilik'  => 'Engrid Gwee', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/17', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/18', 'pemilik'  => 'Julius Dwi P', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/19', 'pemilik'  => 'Meliana', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/20', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/21', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/22', 'pemilik'  => 'Clara', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RC/23', 'pemilik'  => 'Clara', 'ipl' => '500000', 'keterangan' => ''],		
			[ 'blok' => 'RD/1', 'pemilik'  => 'Caritas', 'ipl' => '360000', 'keterangan' => ''],
			[ 'blok' => 'RD/2', 'pemilik'  => 'Caritas', 'ipl' => '360000', 'keterangan' => ''],
			[ 'blok' => 'RD/3', 'pemilik'  => 'Caritas', 'ipl' => '360000', 'keterangan' => ''],
			[ 'blok' => 'RD/5', 'pemilik'  => 'Caritas', 'ipl' => '360000', 'keterangan' => ''],
			[ 'blok' => 'RD/6', 'pemilik'  => 'Caritas', 'ipl' => '360000', 'keterangan' => ''],
			[ 'blok' => 'RD/7', 'pemilik'  => 'Caritas', 'ipl' => '360000', 'keterangan' => ''],
			[ 'blok' => 'RD/8', 'pemilik'  => 'Caritas', 'ipl' => '340000', 'keterangan' => ''],
			[ 'blok' => 'RD/9', 'pemilik'  => 'Edwin Wirawan', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/10', 'pemilik'  => 'Edwin Wirawan', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/11', 'pemilik'  => 'Phang Riko T', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/12', 'pemilik'  => 'Phang Riko T', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/15', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/16', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/17', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/18', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/19', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/20', 'pemilik'  => '-', 'ipl' => '500000', 'keterangan' => ''],
			[ 'blok' => 'RD/21', 'pemilik'  => 'Jhosua Adriel', 'ipl' => '500000', 'keterangan' => '']
		];

        foreach($penghuni_data as $data){
			// insert semua data ke tabel
			$this->db->table('penghuni')->insert($data);
		}


    }
}
