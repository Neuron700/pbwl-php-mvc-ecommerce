<?php

namespace App\Controllers;

use App\Core\Controller;

class Index extends Controller
{

	public function index()
	{
		$data['row_index'] = "Halaman sambutan Project 5 (PHP MVC)";
		$this->dashboard('index/index', $data);
	}

	/**
	 * Contoh route statis: /index/show
	 */
	public function show()
	{
		$data['row_show'] = "Contoh route statis tanpa parameter.";
		$this->dashboard('index/show', $data);
	}

	/**
	 * Contoh route dengan parameter: /index/detail/{id}
	 */
	public function detail($id)
	{
		$data['row_detail'] = "Contoh route dengan parameter. Nilai id = " . $id;
		$this->dashboard('index/detail', $data);
	}
}
