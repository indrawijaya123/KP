<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller
{

	public $form_validation;
	public $input;
	public $session;
	public $jenis;
	protected $title = "Jenis";
	protected $menu = 'jenis';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jenis', 'jenis');
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
		$data['tabeljenis'] = $this->jenis->get_data_jenis();
		$view ='v_jenis';
		$this->_layout($data,$view);
	}
	public function hapus($id=null)
	{
		//periksa apakah id merek terdaftar
		$getData = $this->jenis->get_data_jenis($id);
		if ($getData->num_rows() != 0) {
			$this->jenis->hapus_jenis($id);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">Data kategori berhasil dihapus!</div>');
			redirect('admin/jenis');
		} else {
			redirect('admin/jenis');
		}
	}
	public function edit($id=null)
	{
		$getdata=$this->jenis->get_data_jenis($id);
		if($getdata->num_rows() != 0){
			$this->form_validation->set_rules(
				'namaJenis',
				'Nama Jenis',
				'trim|max_length[20]|required',
				[
					'required' => 'Anda harus mengisi nama kategori terlebih dahulu!',
					'max_length' => 'Panjang karakter maksimal 20 karakter',
				]
			);
			$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
			if ($this->form_validation->run() === false) {
				$data['title'] = $this->title;
				$data['menu'] = $this->menu;
				$data['subMenu'] = $this->subMenu;
				$data['dataJenis'] = $getdata->row()->jenis;
				$data['id'] = $id;
				$data['tag'] = 'edit';
				$view = 'v_formjenis';
				$this->_layout($data, $view);
			}else{
				$namaJenis = $this->input->post('namaJenis', TRUE);
				$dataJenis = [
					'jenis' => $namaJenis,
				];
				//perbaharui data jenis
				$this->jenis->perbaharui_data_jenis($dataJenis,$id);
				$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
				redirect('admin/jenis/edit/'.$id);
			}
		}else{
			redirect('admin/jenis');
		}
	}
	public function add()
	{
		$this->form_validation->set_rules(
			'namaJenis',
			'Nama Jenis',
			'trim|max_length[20]|required',
			[
				'required' => 'Anda harus mengisi nama kategori terlebih dahulu!',
				'max_length' => 'Panjang karakter maksimal 20 karakter',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
		if ($this->form_validation->run() === false) {
			$data['title'] = $this->title;
			$data['menu'] = $this->menu;
			$data['subMenu'] = $this->subMenu;
			$data['dataJenis'] = '';
			$data['tag'] = 'add';
			$view = 'v_formjenis';
			$this->_layout($data, $view);
		}else{
			$namaJenis = $this->input->post('namaJenis', TRUE);
			$dataJenis = [
				'jenis' => $namaJenis,
			];
			//simpan file ke dalam tabel melalui model merek
			$this->jenis->simpan_data_jenis($dataJenis);
			$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data kategori berhasil ditambahkan!</div>');
			redirect('admin/jenis');
		}
	}
}
