<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public $form_validation;
	public $input;
	public $session;
	public $produk;
	protected $title = "Produk";
	protected $menu = 'produk';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk', 'produk');
//		if (!$this->session->userdata('is_login_admin')) {
//			redirect('Login');
//		}
	}

	private function _layout($data, $view)
	{
		$this->load->view('admin/view/' . $view, $data);
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['menu'] = $this->menu;
		$data['subMenu'] = $this->subMenu;
		$data['tabelProduk'] = $this->produk->get_data_produk();
		$view = 'v_produk';
		$this->_layout($data, $view);
	}
	public function hapus($id=null)
	{
		//periksa apakah id stok terdaftar
		$getData = $this->stok->get_data_stok($id);
		if ($getData->num_rows() != 0) {
			$this->stok->hapus_stok($id);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">Data stok berhasil dihapus!</div>');
			redirect('admin/stok');
		} else {
			redirect('admin/stok');
		}
	}
	public function edit($id=null)
	{
		$getdata=$this->stok->get_data_stok($id);
		if($getdata->num_rows() != 0){
			$this->form_validation->set_rules(
				'namaStok',
				'Nama Stok',
				'trim|max_length[11]|required',
				[
					'required' => 'Anda harus mengisi jumlah stok terlebih dahulu!',
					'max_length' => 'Panjang karakter maksimal 11 karakter',
				]
			);
			$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
			if ($this->form_validation->run() === false) {
				$data['title'] = $this->title;
				$data['menu'] = $this->menu;
				$data['subMenu'] = $this->subMenu;
				$data['dataStok'] = $getdata->row()->jenis;
				$data['id'] = $id;
				$data['tag'] = 'edit';
				$view = 'v_formproduk';
				$this->_layout($data, $view);
			}else{
				$namaStok = $this->input->post('namaStok', TRUE);
				$dataStok = [
					'stok' => $namaStok,
				];
				//perbaharui data stok
				$this->stok->perbaharui_data_stok($dataStok,$id);
				$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
				redirect('admin/stok/edit/'.$id);
			}
		}else{
			redirect('admin/stok');
		}
	}
	public function add()
	{
		$this->form_validation->set_rules(
			'namaStok',
			'Nama Stok',
			'trim|max_length[11]|required',
			[
				'required' => 'Anda harus mengisi jumlah stok terlebih dahulu!',
				'max_length' => 'Panjang karakter maksimal 11 karakter',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
		if ($this->form_validation->run() === false) {
			$data['title'] = $this->title;
			$data['menu'] = $this->menu;
			$data['subMenu'] = $this->subMenu;
			$data['dataStok'] = '';
			$data['tag'] = 'add';
			$view = 'v_formproduk';
			$this->_layout($data, $view);
		}else{
			$namaStok = $this->input->post('namaStok', TRUE);
			$dataStok = [
				'stok' => $namaStok,
			];
			//simpan file ke dalam tabel melalui model produk
			$this->stok->simpan_data_stok($dataJenis);
			$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data stok berhasil ditambahkan!</div>');
			redirect('admin/stok');
		}
	}
}
