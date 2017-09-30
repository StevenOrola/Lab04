<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$source = '../data/bcitlogo.png';
                
                // set the mime type for image
                header("Content-type: image/png");
                header('Content-Disposition: inline');
                readfile($source);
	}

}
