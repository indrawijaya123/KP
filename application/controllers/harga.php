<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller
{

	public $form_validation;
	public $input;
	public $session;
	public $rest;
	protected $title = "Harga";
	protected $menu = 'harga';
	protected $subMenu = null;


	public function __construct()
	{
		parent::__construct();
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
		$view ='v_harga';
		$this->_layout($data,$view);
	}

}
