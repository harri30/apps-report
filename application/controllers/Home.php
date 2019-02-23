<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$data['title'] ='Nyoba lagi';
		$data['menu'] ='beranda';
		$this->load->view('home',$data);
	}

	function list()
	{
		$data['user'] = $this->Home_model->get()->result_array();
		$data['title'] = 'List Baru';
		$data['about'] = 'PT. Dreams Sejahtera';
		$this->load->view('list',$data);

	}

	function add()
	{
		$data['title'] = 'Tambah Data';
		$data['tdata'] = 'Tambah Data Karyawan';
		$this->load->view('add', $data);
	}

	function proses(){
		// $email = $this->input->post('email');
		// $pass  = $this->input->post('password');
		// $full  = $this->input->post('fullname');
		// $data = array(
		// 	""
		// );
		$data['user_email'] = $this->input->post('email');
		$data['user_password'] = $this->input->post('password');
		$data['user_fullname'] = $this->input->post('fullname');
		// print_r($this->input->post());exit();
		$this->Home_model->add($data);
		// header(string)
		redirect('home/list');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */