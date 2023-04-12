<?php namespace App\Modules\Land\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{

	protected $helpers = [];

	public function initController(
		\CodeIgniter\HTTP\RequestInterface $request, 
		\CodeIgniter\HTTP\ResponseInterface $response, 
		\Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
	}

}
