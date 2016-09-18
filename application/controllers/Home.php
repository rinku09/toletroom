<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->aview('index');
		// $this->property();
	}

	public function property()
	{
		$this->load->aview('property_listing');
	}

	public function about()
	{
		$this->load->aview('about');
	}

	public function contact()
	{
		$this->load->aview('contact');
	}
}
