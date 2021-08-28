<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public $form_validation;
	public $input;
	public $session;
	public $produk;
	public $jenis;
	public $merek;
	protected $title = "Produk";
	protected $menu = 'produk';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk', 'produk');
		$this->load->model('M_jenis', 'jenis');
		$this->load->model('M_merek', 'merek');
		$this->load->model('M_size', 'size');
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

	public function hapus($id = null)
	{
		//periksa apakah id stok terdaftar
		$getData = $this->produk->get_data_produk($id);
		if ($getData->num_rows() != 0) {
			$this->produk->hapus_produk($id);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">Data stok berhasil dihapus!</div>');
			redirect('admin/produk');
		} else {
			redirect('admin/produk');
		}
	}

	public function edit($id = null)
	{
		$getdata = $this->produk->get_data_produk($id);
		if ($getdata->num_rows() != 0) {
			$this->form_validation->set_rules(
				'jumlahStok',
				'jumlah stok',
				'trim|numeric|required',
				[
					'required' => 'Anda harus mengisi jumlah stok terlebih dahulu!',
					'numeric' => 'harus berformat angka',
				]
			);
			$this->form_validation->set_rules(
				'harga',
				'harga produk',
				'trim|numeric|required',
				[
					'required' => 'Anda harus mengisi harga terlebih dahulu!',
					'numeric' => 'harus berformat angka',
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
				$data['jumlahstok'] = $getdata->row()->jumlah_stok;
				$data['harga'] = $getdata->row()->harga;
				$view = 'v_formstok';
				$this->_layout($data, $view);
			} else {
				$stokBarang = $this->input->post('jumlahStok', TRUE);
				$hargaBarang = $this->input->post('harga', TRUE);
				$dataStok = [
					'harga' => $hargaBarang,
					'jumlah_stok' => $stokBarang,
				];
				//perbaharui data stok
				$this->produk->perbaharui_data_produk($dataStok, $id);
				$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
				redirect('admin/stok/edit/' . $id);
			}
		} else {
			redirect('admin/produk');
		}
	}

	public function add()
	{
		$this->form_validation->set_rules(
			'nmKategori',
			'Nama Kategori',
			'trim|numeric|required',
			[
				'required' => 'Silahkan pilih ketegori produk terlebih dahulu!',
				'numeric' => 'Silahkan pilih ketegori produk terlebih dahulu!',
			]
		);
		$this->form_validation->set_rules(
			'nmMerek',
			'Nama Merek',
			'trim|numeric|required',
			[
				'required' => 'Silahkan pilih merek terlebih dahulu!',
				'numeric' => 'Silahkan pilih merek terlebih dahulu!',
			]
		);
		$this->form_validation->set_rules(
			'nmSize',
			'Nama Size',
			'trim|numeric|required',
			[
				'required' => 'Silahkan pilih size terlebih dahulu!',
				'numeric' => 'Silahkan pilih size terlebih dahulu!',
			]
		);
		$this->form_validation->set_rules(
			'namaProduk',
			'Nama Produk',
			'trim|max_length[10]|required',
			[
				'required' => 'Silahkan nama produk diisi terlebih dahulu!',
				'max_length' => 'Panjang karakter nama produk maksimal 10 karakter!',
			]
		);
		$this->form_validation->set_rules(
			'kodeProduk',
			'Kode Produk',
			'trim|max_length[10]|required',
			[
				'required' => 'Silahkan kode produk diisi terlebih dahulu!',
				'max_length' => 'Panjang karakter kode produk maksimal 10 karakter!',
			]
		);
		$this->form_validation->set_rules(
			'hargaProduk',
			'Harga Produk',
			'trim|numeric|required',
			[
				'required' => 'Silahkan harga produk diisi terlebih dahulu!',
				'numeric' => 'Harga produk harus berupa angka!',
			]
		);
		$this->form_validation->set_rules(
			'stokProduk',
			'Stok Produk',
			'trim|numeric|required',
			[
				'required' => 'Silahkan stok produk diisi terlebih dahulu!',
				'numeric' => 'Stok produk harus berupa angka!',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
		if ($this->form_validation->run() === false) {
			$data['title'] = $this->title;
			$data['menu'] = $this->menu;
			$data['subMenu'] = $this->subMenu;
			$data['dataStok'] = '';
			$data['tag'] = 'add';
			/** Untuk mengisi select kategori, merek dan size */
			$data['selectKategori'] = $this->jenis->get_data_jenis();
			$data['selectMerek'] = $this->merek->get_data_merek();
			$data['selectSize'] = $this->size->get_data_size();
			$view = 'v_formproduk';
			$this->_layout($data, $view);
		} else {
			$nmKategori = $this->input->post('nmKategori', TRUE);
			$nmMerek = $this->input->post('nmMerek', TRUE);
			$nmSize = $this->input->post('nmSize', TRUE);
			$namaProduk = $this->input->post('namaProduk', TRUE);
			$kodeProduk = $this->input->post('kodeProduk', TRUE);
			$hargaProduk = $this->input->post('hargaProduk', TRUE);
			$stokProduk = $this->input->post('stokProduk', TRUE);

			$dataProduk = [
				'id_kategori' => $nmKategori,
				'id_merk' => $nmMerek,
				'id_size' => $nmSize,
				'kode_produk' => $kodeProduk,
				'nama_produk' => $namaProduk,
				'harga' => $hargaProduk,
				'jumlah_stok' => $stokProduk,
			];
//			//simpan file ke dalam tabel melalui model produk
			$this->produk->simpan_data_produk($dataProduk);
			$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data stok berhasil ditambahkan!</div>');
			redirect('admin/produk');
		}
	}
}
