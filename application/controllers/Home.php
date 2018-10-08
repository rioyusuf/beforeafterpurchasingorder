<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_login');
		
	}

	public function index()
	{
		$data = array(
					'title' => "Login Admin - Testindo"
					);
		$this->load->view('home/index', $data);
	}

	// public function register()
	// {
	// 	$data = array(
	// 				'title' => "Register Admin - Testindo"
	// 				);
	// 	$this->load->view('home/register', $data);
	// }

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 		
		$where = array(
			'username' => $username,
			'password' => $password
			);


		$cek = $this->M_login->check_data_login("table_user",$where)->num_rows();
		if($cek > 0){
			$query = $this->db->get_where('table_user', $where);

		    if( $query->num_rows() > 0) {
			    $result = $query->result(); //or $query->result_array() to get an array
			    foreach( $result as $row )
			    {
			         $data_session = array(
										 'nama_user' => "$row->nama_user",
										 'kode_user' => "$row->kode_user",
										 'level' => "$row->level"
										  );
			         $nama_user = array(
										 'nama_user' => "$row->nama_user"
										  );
			         $kode_user = array(
										 'kode_user' => "$row->kode_user"
										  );
			         $level = array(
										 'level' => "$row->level"
										  );
			    }
			}    
			
			$data = $this->session->set_userdata($data_session);
			if (isset($data)) {
				$_SESSION['nama_user'] = $nama_user;
				$_SESSION['kode_user'] = $kode_user;
				$_SESSION['level'] = $level;
			}
			// $this->load->view('admin/index',$data);
			redirect(base_url("admin",$data));
 
		}else{
			$data = array(
						'salah' => "Username atau password salah",
						'title' => "Login Admin - Testindo"
						);
			$this->load->view('home/index',$data);

		};
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}

}
