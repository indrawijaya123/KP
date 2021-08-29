<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller
{

	public $form_validation;
	public $admin;
	public $input;
	public $session;
	protected $title = "setting";
	protected $menu = 'setting';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin', 'admin');
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
		$this->form_validation->set_rules(
			'password',
			'Password',
			'trim|min_length[6]|max_length[16]|required',
			[
				'required' => 'Anda harus mengisi password terlebih dahulu!',
				'max_length' => 'Panjang karakter maksimal 16 karakter',
				'min_length' => 'Panjang karakter minimal 6 karakter',
			]
		);
		$this->form_validation->set_rules(
			'password2',
			'Password',
			'trim|matches[password]|required',
			[
				'required' => 'Anda harus mengisi konfirmasi password terlebih dahulu!',
				'matches' => 'Password konfirmasi tidak sama!',
			]
		);
		$this->form_validation->set_error_delimiters('<span class="text-danger text-sm" >', '</span>');
		if ($this->form_validation->run() === false) {
			$data['title'] = $this->title;
			$data['menu'] = $this->menu;
			$data['subMenu'] = $this->subMenu;
			$view = 'v_setting';
			$this->_layout($data, $view);
		} else {
			$password = $this->input->post('password', TRUE);
			$dataSetting =[
				'password' => password_hash($password,PASSWORD_BCRYPT)
			];
			$this->admin->perbaharui_password($dataSetting);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diperbaharui!</div>');
			redirect('admin/setting');
		}
	}

}
