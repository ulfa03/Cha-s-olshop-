<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function produk()
	{
		$this->load->view('produk');
	}

	public function detail_produk()
	{
		$this->load->view('detail-produk');
	}
}
