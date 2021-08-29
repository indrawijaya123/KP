<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller
{

	public $form_validation;
	public $merek;
	public $input;
	public $session;
	protected $title = "Merk";
	protected $menu = 'merk';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_merek', 'merek');
		if (!$this->session->userdata('is_login_admin')) {
			redirect('Login');
		}
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
		$data['tabelMerek'] = $this->merek->get_data_merek();
		$view ='v_merk';
		$this->_layout($data,$view);
	}

	public function edit($idx)
	{
		$this->form_validation->set_rules(
			'namaMerek',
			'Nama Merek',
			'trim|max_length[15]|required',
			[
				'required' => 'Anda harus mengisi merk terlebih dahulu!',
				'max_length' => 'Panjang karakter maksimal 15 karakter',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
		if ($this->form_validation->run() === false) {
			//cek apakah id merek terdaftar
			$getData = $this->merek->get_data_merek($idx);
			if ($getData->num_rows() != 0) {
				$data['title'] = $this->title;
				$data['menu'] = $this->menu;
				$data['subMenu'] = $this->subMenu;
				$data['tag'] = 'edit';
				$data['dataMerek'] = $getData->row()->merk;
				$data['id'] = $idx;
				$view = 'v_formmerek';
				$this->_layout($data, $view);
			} else {
				redirect('admin/merk');
			}
		} else {
			$namaMerek = $this->input->post('namaMerek', TRUE);
			$dataMerek = [
				'merk' => $namaMerek,
			];
			//perbaharui data merek
			$this->merek->perbaharui_data_merek($dataMerek,$idx);
			$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
			redirect('admin/merk/edit/'.$idx);
		}
	}

	public function add()
	{
		$this->form_validation->set_rules(
			'namaMerek',
			'Nama Merek',
			'trim|max_length[15]|required',
			[
				'required' => 'Anda harus mengisi merk terlebih dahulu!',
				'max_length' => 'Panjang karakter maksimal 15 karakter',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
		if ($this->form_validation->run() === false) {
			$data['title'] = $this->title;
			$data['menu'] = $this->menu;
			$data['subMenu'] = $this->subMenu;
			$data['dataMerek'] = '';
			$data['tag'] = 'add';
			$view = 'v_formmerek';
			$this->_layout($data, $view);
		}else{
			$namaMerek = $this->input->post('namaMerek', TRUE);
			$dataMerek = [
				'merk' => $namaMerek,
			];
			//simpan file ke dalam tabel melalui model merek
			$this->merek->simpan_data_merek($dataMerek);
			$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data merek berhasil ditambahkan!</div>');
			redirect('admin/merk');
		}
	}

	public function hapus($idx)
	{
		//periksa apakah id merek terdaftar
		$getData = $this->merek->get_data_merek($idx);
		if ($getData->num_rows() != 0) {
			$this->merek->hapus_merek($idx);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">Data merek berhasil dihapus!</div>');
			redirect('admin/merk');
		} else {
			redirect('admin/merk');
		}

	}



}
