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
		$view ='v_produk';
		$this->_layout($data,$view);
	}

}
