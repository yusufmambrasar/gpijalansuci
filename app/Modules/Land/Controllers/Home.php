<?php namespace App\Modules\Land\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('\App\Modules\Land\Views\home');
	}

}
