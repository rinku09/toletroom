<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

	public function aview($template, $data = array(), $return = FALSE)
	{
		$this->view('comman/header');
		$this->view($template, $data);
		$this->view('comman/footer');
	}
}
