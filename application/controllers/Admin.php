<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

    public function dashboard()
	{
		$this->load->view('dashboard');
	}

    public function profil()
	{
		$this->load->view('profil');
	}

    public function data_kategori()
	{
		$this->load->view('data-kategori');
	}

    public function data_produk()
	{
		$this->load->view('data-produk');
	}
    
    public function edit_produk()
	{
		$this->load->view('edit-produk');
	}

    public function hapus_produk()
	{
		$this->load->view('proses-hapus');
	}

    public function tambah_produk()
	{
		$this->load->view('tambah-produk');
	}

    public function tambah_kategori()
	{
		$this->load->view('tambah-kategori');
	}

    public function edit_kategori()
	{
		$this->load->view('edit-kategori');
	}

    public function hapus_kategori()
	{
		$this->load->view('proses-hapus');
	}

    public function keluar()
	{
        $this->session->sess_destroy();
		redirect('Admin/index');
	}
}
