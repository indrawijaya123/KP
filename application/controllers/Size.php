<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller
{

	public $form_validation;
	public $input;
	public $session;
	public $size;
	protected $title = "Size";
	protected $menu = 'size';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_size', 'size');
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
		$view ='v_size';
		$data['tabelSize'] = $this->size->get_data_size();
		$this->_layout($data,$view);
	}
	public function hapus($id=null)
	{
		//periksa apakah id size terdaftar
		$getData = $this->size->get_data_size($id);
		if ($getData->num_rows() != 0) {
			$this->size->hapus_size($id);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">Data size berhasil dihapus!</div>');
			redirect('admin/size');
		} else {
			redirect('admin/size');
		}
	}
	public function edit($id=null)
	{
		$getdata=$this->size->get_data_size($id);
		if($getdata->num_rows() != 0){
			$this->form_validation->set_rules(
				'namaSize',
				'Nama size',
				'trim|max_length[15]|required',
				[
					'required' => 'Anda harus mengisi size terlebih dahulu!',
					'max_length' => 'Panjang karakter maksimal 15 karakter',
				]
			);
			$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
			if ($this->form_validation->run() === false) {
				$data['title'] = $this->title;
				$data['menu'] = $this->menu;
				$data['subMenu'] = $this->subMenu;
				$data['dataSize'] = $getdata->row()->size;
				$data['id'] = $id;
				$data['tag'] = 'edit';
				$view = 'v_formsize';
				$this->_layout($data, $view);
			}else{
				$namaSize = $this->input->post('namaSize', TRUE);
				$dataSize = [
					'size' => $namaSize,
				];
				//perbaharui data size
				$this->size->perbaharui_data_size($dataSize,$id);
				$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
				redirect('admin/size/edit/'.$id);
			}
		}else{
			redirect('admin/size');
		}
	}
	public function add()
	{
		$this->form_validation->set_rules(
			'namaSize',
			'Nama Size',
			'trim|max_length[15]|required',
			[
				'required' => 'Anda harus mengisi size terlebih dahulu!',
				'max_length' => 'Panjang karakter maksimal 15 karakter',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
		if ($this->form_validation->run() === false) {
			$data['title'] = $this->title;
			$data['menu'] = $this->menu;
			$data['subMenu'] = $this->subMenu;
			$data['dataSize'] = '';
			$data['tag'] = 'add';
			$view = 'v_formsize';
			$this->_layout($data, $view);
		}else{
			$namaSize = $this->input->post('namaSize', TRUE);
			$dataSize = [
				'size' => $namaSize,
			];
			//simpan file ke dalam tabel melalui model size
			$this->size->simpan_data_size($dataSize);
			$this->session->set_flashdata('pesan1', '<div class="alert alert-success" role="alert">Data size berhasil ditambahkan!</div>');
			redirect('admin/size');
		}
	}
}
