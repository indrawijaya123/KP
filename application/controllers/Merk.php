<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller
{

	public $form_validation;
	public $merek;
	protected $title = "Merk";
	protected $menu = 'merk';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_merek', 'merek');
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
		$data['tabelMerek'] = $this->merek->get_data_merek();
		$view ='v_merk';
		$this->_layout($data,$view);
	}

}
