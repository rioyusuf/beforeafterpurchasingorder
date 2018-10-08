<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_admin');
	}
	public function index()
	{
		$data = array(
					'title' => "Admin - Testindo",
					);
		$this->load->view('admin/index', $data);
	}
	public function table()
	{
		$data = array(
					'title' => "Table Data - Testindo"
					);
		$data['table'] = $this->M_admin->data_inquiry()->result();
		$data['table_quote'] = $this->M_admin->data_quote()->result();
		$data['table_po'] = $this->M_admin->data_po()->result();
		$this->load->view('admin/table', $data);
	}
	public function table_menu()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['jenis'] = $this->M_admin->data_jenis()->result();
		$data['website'] = $this->M_admin->data_website()->result();
		$data['klien'] = $this->M_admin->data_klien()->result();
		$data['user'] = $this->M_admin->data_sales()->result();
		$data['status'] = $this->M_admin->data_status()->result();
		$data['status_po'] = $this->M_admin->data_status_purchasing_order()->result();
		$data['prog'] = $this->M_admin->data_prog()->result();
		$data['industri'] = $this->M_admin->data_industri()->result();
		$this->load->view('admin/menu_master', $data);
	}
	public function table_industri()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['industri'] = $this->M_admin->data_industri()->result();
		$this->load->view('admin/table_industri', $data);
	}
	public function table_jenis()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['jenis'] = $this->M_admin->data_jenis()->result();
		$this->load->view('admin/table_jenis', $data);
	}
	public function table_klien()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['klien'] = $this->M_admin->data_klien()->result();
		$this->load->view('admin/table_klien', $data);
	}
	public function table_prog()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['prog'] = $this->M_admin->data_prog()->result();
		$this->load->view('admin/table_prog', $data);
	}
	public function table_status()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['status'] = $this->M_admin->data_status()->result();
		$this->load->view('admin/table_status', $data);
	}
	public function table_status_po()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['status_po'] = $this->M_admin->data_status_purchasing_order()->result();
		$this->load->view('admin/table_status_po', $data);
	}
	public function table_user()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['user'] = $this->M_admin->data_user()->result();
		$this->load->view('admin/table_user', $data);
	}
	public function table_website()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['website'] = $this->M_admin->data_datawebsite()->result();
		$this->load->view('admin/table_website', $data);
	}
	public function table_po()
	{
		$data = array(
					'title' => "Table Menu Data - Testindo"
					);
		$data['table_po'] = $this->M_admin->data_po()->result();
		$data['jenis'] = $this->M_admin->data_jenis()->result();
		$data['website'] = $this->M_admin->data_website()->result();
		$data['klien'] = $this->M_admin->data_klien()->result();
		$data['user'] = $this->M_admin->data_sales()->result();
		$data['status'] = $this->M_admin->data_status()->result();
		$this->load->view('admin/table_po', $data);
	}
	public function add_inquiry()
	{
		$data = array(
			'title' => "Tambah Data Admin - Testindo"
		);
		$data['table_inquiry'] = $this->M_admin->add_inquiry_data()->result();
		$data['table_jenis'] = $this->M_admin->data_jenis()->result();
		$data['table_website'] = $this->M_admin->data_website()->result();
		$data['table_klien'] = $this->M_admin->data_klien()->result();
		$data['table_user'] = $this->M_admin->data_sales()->result();
		$data['table_status'] = $this->M_admin->data_status()->result();
		$this->load->view('admin/add_inquiry',$data);
	}
	public function add_inquiry_data()
	{
		$kode_jenis = $this->input->post('kode_jenis');
		$kode_website = $this->input->post('kode_website');
		$bulan_inquiry = $this->input->post('bulan_inquiry');
		$nomor_urut_inquiry = $this->input->post('nomor_urut_inquiry');
		$nomor_surat_inquiry = $this->input->post('kode_jenis')."-".$this->input->post('kode_website')."-".$this->input->post('bulan_inquiry')."-".$this->input->post('nomor_urut_inquiry');
		$tanggal_input_inquiry = $this->input->post('tanggal_input_inquiry');
		$tanggal_update_inquiry = $this->input->post('tanggal_update_inquiry');
		$kode_status = $this->input->post('kode_status');
		$kebutuhan_inquiry = $this->input->post('kebutuhan_inquiry');
		$nilai_quote_inquiry = $this->input->post('nilai_quote_inquiry');
		$kode_kantor_klien = $this->input->post('kode_kantor_klien');
		$kode_user = $this->input->post('kode_user');
		$nomor_po = $this->input->post('nomor_po');
		// connect to the server
		$conn = new mysqli('localhost', 'root', '', 'adminindo_beforepurchasingorder');
		$row_jenis = $conn->query("SELECT * FROM table_jenis where kode_jenis =  '$kode_jenis'")->fetch_array();
		$keterangan_jenis = $row_jenis["keterangan_jenis"];
		$row_website = $conn->query("SELECT * FROM table_website where kode_website =  '$kode_website'")->fetch_array();
		$keterangan_website = $row_website["keterangan_website"];
		$row_status = $conn->query("SELECT * FROM table_status where kode_status =  '$kode_status'")->fetch_array();
		$keterangan_status = $row_status["keterangan_status"];
		$row_klien = $conn->query("SELECT * FROM table_klien where kode_kantor_klien =  '$kode_kantor_klien'")->fetch_array();
		$nama_kantor_klien = $row_klien["nama_kantor_klien"];
		$alamat_kantor_klien = $row_klien["alamat_kantor_klien"];
		$telepon_kantor_klien = $row_klien["telepon_kantor_klien"];
		$nama_klien = $this->input->post('nama_klien');
		$telepon_klien = $this->input->post('telepon_klien');
		$email_klien = $this->input->post('email_klien');
		$row_user = $conn->query("SELECT * FROM table_user where kode_user =  '$kode_user'")->fetch_array();
		$nama_user = $row_user["nama_user"];

		$data = array(
			'kode_jenis' => $kode_jenis,
			'keterangan_jenis' => $keterangan_jenis,
			'kode_website' => $kode_website,
			'keterangan_website' => $keterangan_website,
			'bulan_inquiry' => $bulan_inquiry,
			'nomor_urut_inquiry' => $nomor_urut_inquiry,
			'nomor_surat_inquiry' => $nomor_surat_inquiry,
			'tanggal_input_inquiry' => $tanggal_input_inquiry,
			'tanggal_update_inquiry' => $tanggal_update_inquiry,
			'kode_status' => $kode_status,
			'keterangan_status' => $keterangan_status,
			'kebutuhan_inquiry' => $kebutuhan_inquiry,
			'nilai_quote_inquiry' => $nilai_quote_inquiry,
			'kode_kantor_klien' => $kode_kantor_klien,
			'nama_kantor_klien' => $nama_kantor_klien,
			'alamat_kantor_klien' => $alamat_kantor_klien,
			'telepon_kantor_klien' => $telepon_kantor_klien,
			'nama_klien' => $nama_klien,
			'telepon_klien' => $telepon_klien,
			'email_klien' => $email_klien,
			'kode_user' => $kode_user,
			'nama_user' => $nama_user,
			'nomor_po' => $nomor_po
			);
		$this->M_admin->add_all_data($data,'table_inquiry');
		redirect('admin/table');
	}
	function edit_inquiry($id)
	{
		$where = array('nomor_urut_inquiry' => $id);
		$data = array (
				'title' => "Edit Data Admin - Testindo"
		);
		$data['table_inquiry'] = $this->M_admin->edit_all_data($where,'table_inquiry')->result();
		$data['table_jenis'] = $this->M_admin->data_jenis()->result();
		$data['table_website'] = $this->M_admin->data_website()->result();
		$data['table_klien'] = $this->M_admin->data_klien()->result();
		$data['table_user'] = $this->M_admin->data_sales()->result();
		$data['table_status'] = $this->M_admin->data_status()->result();
		$this->load->view('admin/edit_inquiry',$data);
	}
	function edit_inquiry_data()
	{
		$kode_jenis = $this->input->post('kode_jenis');
		$kode_website = $this->input->post('kode_website');
		$bulan_inquiry = $this->input->post('bulan_inquiry');
		$nomor_urut_inquiry = $this->input->post('nomor_urut_inquiry');
		$nomor_surat_inquiry = $kode_jenis."-".$kode_website."-".$this->input->post('bulan_inquiry')."-".$this->input->post('nomor_urut_inquiry');
		$tanggal_input_inquiry = $this->input->post('tanggal_input_inquiry');
		$tanggal_update_inquiry = $this->input->post('tanggal_update_inquiry');
		$kode_status = $this->input->post('kode_status');
		$kebutuhan_inquiry = $this->input->post('kebutuhan_inquiry');
		$nilai_quote_inquiry = $this->input->post('nilai_quote_inquiry');
		$kode_kantor_klien = $this->input->post('kode_kantor_klien');
		$kode_user = $this->input->post('kode_user');
		$nomor_po = $this->input->post('nomor_po');
		// connect to the server
		$conn = new mysqli('localhost', 'root', '', 'adminindo_beforepurchasingorder');
		// $row_jenis = $conn->query("SELECT * FROM table_jenis where kode_jenis =  '$kode_jenis'")->fetch_array();
		// $keterangan_jenis = $row_jenis["keterangan_jenis"];
		$row_website = $conn->query("SELECT * FROM table_website where kode_website =  '$kode_website'")->fetch_array();
		$keterangan_website = $row_website["keterangan_website"];
		$row_status = $conn->query("SELECT * FROM table_status where kode_status =  '$kode_status'")->fetch_array();
		$keterangan_status = $row_status["keterangan_status"];
		$row_klien = $conn->query("SELECT * FROM table_klien where kode_kantor_klien =  '$kode_kantor_klien'")->fetch_array();
		$nama_kantor_klien = $row_klien["nama_kantor_klien"];
		$alamat_kantor_klien = $row_klien["alamat_kantor_klien"];
		$telepon_kantor_klien = $row_klien["telepon_kantor_klien"];
		$nama_klien = $this->input->post('nama_klien');
		$telepon_klien = $this->input->post('telepon_klien');
		$email_klien = $this->input->post('email_klien');
		$row_user = $conn->query("SELECT * FROM table_user where kode_user =  '$kode_user'")->fetch_array();
		$nama_user = $row_user["nama_user"];
		if ($kode_status == "BQ") {
			$kode_jenis = "INQ";
			$keterangan_jenis = "Inquiry";
			$nomor_surat_inquiry = $kode_jenis."-".$kode_website."-".$this->input->post('bulan_inquiry')."-".$this->input->post('nomor_urut_inquiry');
		}else{
			$kode_jenis = "QUO";
			$keterangan_jenis = "Penawaran";
			$nomor_surat_inquiry = $kode_jenis."-".$kode_website."-".$this->input->post('bulan_inquiry')."-".$this->input->post('nomor_urut_inquiry');
		}

		$data = array(
			'kode_jenis' => $kode_jenis,
			'keterangan_jenis' => $keterangan_jenis,
			'kode_website' => $kode_website,
			'keterangan_website' => $keterangan_website,
			'bulan_inquiry' => $bulan_inquiry,
			'nomor_urut_inquiry' => $nomor_urut_inquiry,
			'nomor_surat_inquiry' => $nomor_surat_inquiry,
			'tanggal_input_inquiry' => $tanggal_input_inquiry,
			'tanggal_update_inquiry' => $tanggal_update_inquiry,
			'kode_status' => $kode_status,
			'keterangan_status' => $keterangan_status,
			'kebutuhan_inquiry' => $kebutuhan_inquiry,
			'nilai_quote_inquiry' => $nilai_quote_inquiry,
			'kode_kantor_klien' => $kode_kantor_klien,
			'nama_kantor_klien' => $nama_kantor_klien,
			'alamat_kantor_klien' => $alamat_kantor_klien,
			'telepon_kantor_klien' => $telepon_kantor_klien,
			'nama_klien' => $nama_klien,
			'telepon_klien' => $telepon_klien,
			'email_klien' => $email_klien,
			'kode_user' => $kode_user,
			'nama_user' => $nama_user,
			'nomor_po' => $nomor_po
			);
	
		$where = array(
			'nomor_urut_inquiry' => $nomor_urut_inquiry
		);
		
		$this->M_admin->save_edit_all_data($where,$data,'table_inquiry');
		$data_po = array(
			'nomor_urut_inquiry' => $nomor_urut_inquiry,
			'nomor_surat_inquiry' => $nomor_surat_inquiry,
			'tanggal_update_inquiry' => $tanggal_update_inquiry,
			'tanggal_deadline' => "",
			'kode_kantor_klien' => $kode_kantor_klien,
			'nama_kantor_klien' => $nama_kantor_klien,
			'kode_status' => $kode_status,
			'keterangan_status' => $keterangan_status,
			'kode_user' => $kode_user,
			'nama_user' => $nama_user,
			'update_purchasing_order' => "",
			'kode_status_purchasing_order' => "PO",
			'keterangan_status_purchasing_order' => "Purchasing Order",
			'nomor_po' => $nomor_po,
			'nilai_quote_inquiry' => $nilai_quote_inquiry,
			'discount' => "0",
			'kode_prog' => "OP",
			'keterangan_prog' => "On Progress"

			);
		$this->M_admin->add_all_data($data_po,'table_purchasing_order');

		if ($kode_status != "BQ") {
            $mulais =date_create($tanggal_input_inquiry); // waktu mulai
            $exps = date_create($tanggal_update_inquiry); // batas waktu
            if($exps < $mulais){
                $diffs =  date_diff($mulais, $mulais);
            }else{
                $diffs =  date_diff($mulais, $exps);
            }
                                
            $days = $diffs->format("%a");
			$data_detail = array(
			'kode_jenis' => $kode_jenis,
			'kode_website' => $kode_website,
			'bulan_inquiry' => $bulan_inquiry,
			'nomor_urut_inquiry' => $nomor_urut_inquiry,
			'nomor_surat_inquiry' => $nomor_surat_inquiry,
			'kode_status' => $kode_status,
			'kode_kantor_klien' => $kode_kantor_klien,
			'kode_user' => $kode_user,
			'rentang_waktu' => $days
			);
		$this->M_admin->add_all_data($data_detail,'table_detail_inquiry');
		}
		redirect('admin/table');

	}
	function delete_inquiry($id)
	{
		$where = array('nomor_urut_inquiry' => $id);
		$this->M_admin->delete_all_data($where,'table_inquiry');
		redirect('admin/table');
	}
	function edit_po($id)
	{
		$where = array('nomor' => $id);
		$data = array (
				'title' => "Edit PO Admin - Testindo"
		);
		$data['table_po'] = $this->M_admin->edit_all_data($where,'table_purchasing_order')->result();
		$data['status_purchasing_order'] = $this->M_admin->data_status_purchasing_order()->result();
		$this->load->view('admin/edit_po',$data);
	}
	function edit_po_data()
	{
		$nomor = $this->input->post('nomor');
		$nomor_urut_inquiry = $this->input->post('nomor_urut_inquiry');
		$nomor_surat_inquiry = $this->input->post('nomor_surat_inquiry');
		$tanggal_update_inquiry = $this->input->post('tanggal_update_inquiry');
		$tanggal_deadline = $this->input->post('tanggal_deadline');
		$kode_kantor_klien = $this->input->post('kode_kantor_klien');
		$kode_status = $this->input->post('kode_status');
		$kode_user = $this->input->post('kode_user');
		$update_purchasing_order = $this->input->post('update_purchasing_order');
		$kode_status_purchasing_order = $this->input->post('kode_status_purchasing_order');
		$nomor_po = $this->input->post('nomor_po');
		$nilai_quote_inquiry = $this->input->post('nilai_quote_inquiry');
		$discount = $this->input->post('discount');

		$conn = new mysqli('localhost', 'root', '', 'adminindo_beforepurchasingorder');
		$row_klien = $conn->query("SELECT * FROM table_klien where kode_kantor_klien =  '$kode_kantor_klien'")->fetch_array();
		$nama_kantor_klien = $row_klien["nama_kantor_klien"];
		$row_status = $conn->query("SELECT * FROM table_status where kode_status =  '$kode_status'")->fetch_array();
		$keterangan_status = $row_status["keterangan_status"];
		$row_user = $conn->query("SELECT * FROM table_user where kode_user =  '$kode_user'")->fetch_array();
		$nama_user = $row_user["nama_user"];
		$row_status_po = $conn->query("SELECT * FROM table_status_purchasing_order where kode_status_purchasing_order =  '$kode_status_purchasing_order'")->fetch_array();
		$keterangan_status_purchasing_order = $row_status_po["keterangan_status_purchasing_order"];
		

		$data = array(
			'nomor_urut_inquiry' => $nomor_urut_inquiry,
			'nomor_surat_inquiry' => $nomor_surat_inquiry,
			'tanggal_update_inquiry' => $tanggal_update_inquiry,
			'tanggal_deadline' => $tanggal_deadline,
			'kode_kantor_klien' => $kode_kantor_klien,
			'nama_kantor_klien' => $nama_kantor_klien,
			'kode_status' => $kode_status,
			'keterangan_status' => $keterangan_status,
			'kode_user' => $kode_user,
			'nama_user' => $nama_user,
			'update_purchasing_order' => $update_purchasing_order,
			'kode_status_purchasing_order' => $kode_status_purchasing_order,
			'keterangan_status_purchasing_order' => $keterangan_status_purchasing_order,
			'nomor_po' => $nomor_po,
			'nilai_quote_inquiry' => $nilai_quote_inquiry,
			'discount' => $discount
			);
		$where = array(
			'nomor' => $nomor
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_purchasing_order');
		redirect('admin/table_po');
	}
	function delete_po($id)
	{
		$where = array('nomor' => $id);
		$this->M_admin->delete_all_data($where,'table_purchasing_order');
		redirect('admin/table_po');
	}
	function delete_po_active()
	{
		$datas = $this->input->post('nomor');
		$this->M_admin->deleteUser($datas);
		redirect('admin/table_po');
	}
	function add_jenis()
	{
		$data = array(
			'title' => "Tambah Jenis Admin - Testindo"
		);
		$this->load->view('admin/add_jenis',$data);
	}
	function add_jenis_data()
	{
		$kode_jenis = $this->input->post('kode_jenis');
		$keterangan_jenis = $this->input->post('keterangan_jenis');

		$data = array(
			'kode_jenis' => $kode_jenis,
			'keterangan_jenis' => $keterangan_jenis,
			);
		$this->M_admin->add_all_data($data,'table_jenis');
		redirect('admin/table_menu');
	}
	function edit_jenis($id)
	{
		$where = array('nomor_jenis' => $id);
		$data = array (
				'title' => "Edit Jenis Admin - Testindo"
		);
		$data['table_jenis'] = $this->M_admin->edit_all_data($where,'table_jenis')->result();
		$this->load->view('admin/edit_jenis',$data);
	}
	function edit_jenis_data()
	{
		$nomor_jenis = $this->input->post('nomor_jenis');
		$kode_jenis = $this->input->post('kode_jenis');
		$keterangan_jenis = $this->input->post('keterangan_jenis');

		$data = array(
			'kode_jenis' => $kode_jenis,
			'keterangan_jenis' => $keterangan_jenis,
			);
		$where = array(
			'nomor_jenis' => $nomor_jenis
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_jenis');
		redirect('admin/table_menu');
	}
	function delete_jenis($id)
	{
		$where = array('nomor_jenis' => $id);
		$this->M_admin->delete_all_data($where,'table_jenis');
		redirect('admin/table_menu');
	}
	function add_website()
	{
		$data = array(
			'title' => "Tambah Website Admin - Testindo"
		);
		$this->load->view('admin/add_website',$data);
	}
	function add_website_data()
	{
		$kode_website = $this->input->post('kode_website');
		$keterangan_website = $this->input->post('keterangan_website');

		$data = array(
			'kode_website' => $kode_website,
			'keterangan_website' => $keterangan_website,
			);
		$this->M_admin->add_all_data($data,'table_website');
		redirect('admin/table_menu');
	}
	function edit_website($id)
	{
		$where = array('nomor_website' => $id);
		$data = array (
				'title' => "Edit Website Admin - Testindo"
		);
		$data['table_website'] = $this->M_admin->edit_all_data($where,'table_website')->result();
		$this->load->view('admin/edit_website',$data);
	}
	function edit_website_data()
	{
		$nomor_website = $this->input->post('nomor_website');
		$kode_website = $this->input->post('kode_website');
		$keterangan_website = $this->input->post('keterangan_website');

		$data = array(
			'kode_website' => $kode_website,
			'keterangan_website' => $keterangan_website,
			);
		$where = array(
			'nomor_website' => $nomor_website
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_website');
		redirect('admin/table_menu');
	}
	function delete_website($id)
	{
		$where = array('nomor_website' => $id);
		$this->M_admin->delete_all_data($where,'table_website');
		redirect('admin/table_menu');
	}
	function add_klien()
	{
		$data = array(
			'title' => "Tambah Website Admin - Testindo"
		);
		$data['table_klien'] = $this->M_admin->add_klien_data()->result();
		$data['table_industri'] = $this->M_admin->add_industri_data()->result();
		$this->load->view('admin/add_klien',$data);
	}
	function add_klien_data()
	{
		$kode_kantor_klien = $this->input->post('kode_kantor_klien');
		$nama_kantor_klien = $this->input->post('nama_kantor_klien');
		$alamat_kantor_klien = $this->input->post('alamat_kantor_klien');
		$telepon_kantor_klien = $this->input->post('telepon_kantor_klien');
		$kode_industri = $this->input->post('kode_industri');
		$conn = new mysqli('localhost', 'root', '', 'adminindo_beforepurchasingorder');
		$row_klien = $conn->query("SELECT * FROM table_industri where kode_industri =  '$kode_industri'")->fetch_array();
		$keterangan_industri = $row_klien['keterangan_industri'];

		$data = array(
			'kode_kantor_klien' => $kode_kantor_klien,
			'nama_kantor_klien' => $nama_kantor_klien,
			'alamat_kantor_klien' => $alamat_kantor_klien,
			'telepon_kantor_klien' => $telepon_kantor_klien,
			'kode_industri' => $kode_industri,
			'keterangan_industri' => $keterangan_industri
			);
		$this->M_admin->add_all_data($data,'table_klien');
		redirect('admin/table_menu');
	}
	function edit_klien($id)
	{
		$where = array('nomor_klien' => $id);
		$data = array (
				'title' => "Edit Klien Admin - Testindo"
		);
		$data['table_klien'] = $this->M_admin->edit_all_data($where,'table_klien')->result();
		$data['table_industri'] = $this->M_admin->data_industri()->result();
		$this->load->view('admin/edit_klien',$data);
	}
	function edit_klien_data()
	{
		$nomor_klien = $this->input->post('nomor_klien');
		$kode_kantor_klien = $this->input->post('kode_kantor_klien');
		$nama_kantor_klien = $this->input->post('nama_kantor_klien');
		$alamat_kantor_klien = $this->input->post('alamat_kantor_klien');
		$telepon_kantor_klien = $this->input->post('telepon_kantor_klien');
		$kode_industri = $this->input->post('kode_industri');
		$conn = new mysqli('localhost', 'root', '', 'adminindo_beforepurchasingorder');
		$row_klien = $conn->query("SELECT * FROM table_industri where kode_industri =  '$kode_industri'")->fetch_array();
		$keterangan_industri = $row_klien['keterangan_industri'];
	
		$data = array(
			'kode_kantor_klien' => $kode_kantor_klien,
			'nama_kantor_klien' => $nama_kantor_klien,
			'alamat_kantor_klien' => $alamat_kantor_klien,
			'telepon_kantor_klien' => $telepon_kantor_klien,
			'kode_industri' => $kode_industri,
			'keterangan_industri' => $keterangan_industri
			);
		$where = array(
			'nomor_klien' => $nomor_klien
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_klien');
		redirect('admin/table_menu');
	}
	function delete_klien($id)
	{
		$where = array('nomor_klien' => $id);
		$this->M_admin->delete_all_data($where,'table_klien');
		redirect('admin/table_menu');
	}
	function add_user()
	{
		$data = array(
			'title' => "Tambah Sales Admin - Testindo"
		);
		$data['table_user'] = $this->M_admin->add_user_data()->result();
		$this->load->view('admin/add_user',$data);
	}
	function add_user_data()
	{
		$kode_user = $this->input->post('kode_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_user = $this->input->post('nama_user');
		$level = $this->input->post('level');

		$data = array(
			'kode_user' => $kode_user,
			'username' => $username,
			'password' => $password,
			'nama_user' => $nama_user,
			'level' => $level
			);
		$this->M_admin->add_all_data($data,'table_user');
		redirect('admin/table_menu');
	}
	function edit_user($id)
	{
		$where = array('nomor_user' => $id);
		$data = array (
				'title' => "Edit User Admin - Testindo"
		);
		$data['table_user'] = $this->M_admin->edit_all_data($where,'table_user')->result();
		$this->load->view('admin/edit_user',$data);
	}
	function edit_user_data()
	{
		$nomor_user = $this->input->post('nomor_user');
		$kode_user = $this->input->post('kode_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_user = $this->input->post('nama_user');
		$level = $this->input->post('level');

		$data = array(
			'kode_user' => $kode_user,
			'username' => $username,
			'password' => $password,
			'nama_user' => $nama_user,
			'level' => $level
			);
		$where = array(
			'nomor_user' => $nomor_user
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_user');
		redirect('admin/table_menu');
	}
	function delete_user($id)
	{
		$where = array('nomor_user' => $id);
		$this->M_admin->delete_all_data($where,'table_user');
		redirect('admin/table_menu');
	}
	function add_status()
	{
		$data = array(
			'title' => "Tambah Status Admin - Testindo"
		);
		$data['table_status'] = $this->M_admin->add_status_data()->result();
		$this->load->view('admin/add_status',$data);
	}
	function add_status_data()
	{
		$kode_status = $this->input->post('kode_status');
		$keterangan_status = $this->input->post('keterangan_status');

		$data = array(
			'kode_status' => $kode_status,
			'keterangan_status' => $keterangan_status
			);
		$this->M_admin->add_all_data($data,'table_status');
		redirect('admin/table_menu');
	}
	function edit_status($id)
	{
		$where = array('nomor_status' => $id);
		$data = array (
				'title' => "Edit Status Admin - Testindo"
		);
		$data['table_status'] = $this->M_admin->edit_all_data($where,'table_status')->result();
		$this->load->view('admin/edit_status',$data);
	}
	function edit_status_data()
	{
		$nomor_status = $this->input->post('nomor_status');
		$kode_status = $this->input->post('kode_status');
		$keterangan_status = $this->input->post('keterangan_status');

		$data = array(
			'kode_status' => $kode_status,
			'keterangan_status' => $keterangan_status,
			);
		$where = array(
			'nomor_status' => $nomor_status
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_status');
		redirect('admin/table_menu');
	}
	function delete_status($id)
	{
		$where = array('nomor_status' => $id);
		$this->M_admin->delete_all_data($where,'table_status');
		redirect('admin/table_menu');
	}
	function add_status_po()
	{
		$data = array(
			'title' => "Tambah Status PO Admin - Testindo"
		);
		$data['table_status_po'] = $this->M_admin->add_status_po_data()->result();
		$this->load->view('admin/add_status_po',$data);
	}
	function add_status_po_data()
	{
		$kode_status_purchasing_order = $this->input->post('kode_status_purchasing_order');
		$keterangan_status_purchasing_order = $this->input->post('keterangan_status_purchasing_order');

		$data = array(
			'kode_status_purchasing_order' => $kode_status_purchasing_order,
			'keterangan_status_purchasing_order' => $keterangan_status_purchasing_order
			);
		$this->M_admin->add_all_data($data,'table_status_purchasing_order');
		redirect('admin/table_menu');
	}
	function edit_status_po($id)
	{
		$where = array('nomor_status' => $id);
		$data = array (
				'title' => "Edit Status PO Admin - Testindo"
		);
		$data['table_status_po'] = $this->M_admin->edit_all_data($where,'table_status_purchasing_order')->result();
		$this->load->view('admin/edit_status_po',$data);
	}
	function edit_status_po_data()
	{
		$nomor_status = $this->input->post('nomor_status');
		$kode_status_purchasing_order = $this->input->post('kode_status_purchasing_order');
		$keterangan_status_purchasing_order = $this->input->post('keterangan_status_purchasing_order');

		$data = array(
			'kode_status_purchasing_order' => $kode_status_purchasing_order,
			'keterangan_status_purchasing_order' => $keterangan_status_purchasing_order
			);
		$where = array(
			'nomor_status' => $nomor_status
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_status_purchasing_order');
		redirect('admin/table_menu');
	}
	function delete_status_po($id)
	{
		$where = array('nomor_status' => $id);
		$this->M_admin->delete_all_data($where,'table_status_purchasing_order');
		redirect('admin/table_menu');
	}
	function add_prog_po()
	{
		$data = array(
			'title' => "Tambah Progress Admin - Testindo"
		);
		$data['table_prog'] = $this->M_admin->add_prog_data()->result();
		$this->load->view('admin/add_prog',$data);
	}
	function add_prog_po_data()
	{
		$kode_prog = $this->input->post('kode_prog');
		$keterangan_prog = $this->input->post('keterangan_prog');

		$data = array(
			'kode_prog' => $kode_prog,
			'keterangan_prog' => $keterangan_prog
			);
		$this->M_admin->add_all_data($data,'table_prog');
		redirect('admin/table_menu');
	}
	function edit_prog_po($id)
	{
		$where = array('nomor_prog' => $id);
		$data = array (
				'title' => "Edit Progress Admin - Testindo"
		);
		$data['table_prog'] = $this->M_admin->edit_all_data($where,'table_prog')->result();
		$this->load->view('admin/edit_prog',$data);
	}
	function edit_prog_po_data()
	{
		$nomor_prog = $this->input->post('nomor_prog');
		$kode_prog = $this->input->post('kode_prog');
		$keterangan_prog = $this->input->post('keterangan_prog');

		$data = array(
			'kode_prog' => $kode_prog,
			'keterangan_prog' => $keterangan_prog,
			);
		$where = array(
			'nomor_prog' => $nomor_prog
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_prog');
		redirect('admin/table_menu');
	}
	function delete_prog_po($id)
	{
		$where = array('nomor_prog' => $id);
		$this->M_admin->delete_all_data($where,'table_prog');
		redirect('admin/table_menu');
	}
	function add_industri()
	{
		$data = array(
			'title' => "Tambah Industri Admin - Testindo"
		);
		$data['table_industri'] = $this->M_admin->add_industri_data()->result();
		$this->load->view('admin/add_industri',$data);
	}
	function add_industri_data()
	{
		$kode_industri = $this->input->post('kode_industri');
		$keterangan_industri = $this->input->post('keterangan_industri');

		$data = array(
			'kode_industri' => $kode_industri,
			'keterangan_industri' => $keterangan_industri
			);
		$this->M_admin->add_all_data($data,'table_industri');
		redirect('admin/table_menu');
	}
	function edit_industri($id)
	{
		$where = array('nomor_industri' => $id);
		$data = array (
				'title' => "Edit Industri Admin - Testindo"
		);
		$data['table_industri'] = $this->M_admin->edit_all_data($where,'table_industri')->result();
		$this->load->view('admin/edit_industri',$data);
	}
	function edit_industri_data()
	{
		$nomor_industri = $this->input->post('nomor_industri');
		$kode_industri = $this->input->post('kode_industri');
		$keterangan_industri = $this->input->post('keterangan_industri');

		$data = array(
			'kode_industri' => $kode_industri,
			'keterangan_industri' => $keterangan_industri
			);
		$where = array(
			'nomor_industri' => $nomor_industri
		);
		$this->M_admin->save_edit_all_data($where, $data,'table_industri');
		redirect('admin/table_menu');
	}
	function delete_industri($id)
	{
		$where = array('nomor_industri' => $id);
		$this->M_admin->delete_all_data($where,'table_industri');
		redirect('admin/table_menu');
	}
	function analytics()
	{
		$data = array(
			'title' => "Analytics - Testindo"
		);
		$data['table'] = $this->M_admin->data_inquiry()->result();
		$data['jenis'] = $this->M_admin->data_jenis()->result();
		$data['website'] = $this->M_admin->data_website()->result();
		$data['klien'] = $this->M_admin->data_klien()->result();
		$data['user'] = $this->M_admin->data_sales()->result();
		$this->load->view('admin/analytics',$data);
	}
	function export_po()
	{
		$a = $this->input->post('date1');
		$b = $this->input->post('date2');
		$data = array(
					'title' => "Table Menu Data - Testindo",
					'date_1' => $a,
					'date_2' => $b
					);
		
		$data['table_po'] = $this->M_admin->data_po_date()->result();
		$this->load->view('admin/export_po', $data);
	}
	function export_data()
	{
		$data = array(
			'title' => "Report Admin - Testindo"
		);
		$data['table_user'] = $this->M_admin->data_sales()->result();
		$data['table_status'] = $this->M_admin->data_status()->result();
		$this->load->view('admin/export_data', $data);
	}
	function export(){
		$data['table'] = $this->M_admin->tampil_data()->result();
		$this->load->view('admin/export',$data);
	}

function export_semua(){
		$data['table'] = $this->M_admin->tampil_data_semua()->result();
		$this->load->view('admin/export',$data);
	}

	function export_sudah_po(){
		$data['table'] = $this->M_admin->tampil_data_sudah_po()->result();
		$this->load->view('admin/export',$data);
	}
	function export_sudah_quote(){
		$data['table'] = $this->M_admin->tampil_data_sudah_quote()->result();
		$this->load->view('admin/export',$data);
	}
	function export_belum_quote(){
		$data['table'] = $this->M_admin->tampil_data_belum_quote()->result();
		$this->load->view('admin/export',$data);
	}
	function export_close(){
		$data['table'] = $this->M_admin->tampil_data_close()->result();
		$this->load->view('admin/export',$data);
	}
	function export_date(){
		$data['table'] = $this->M_admin->tampil_data_date()->result();
		$this->load->view('admin/export',$data);
	}
	function export_specify(){
		$data['table'] = $this->M_admin->tampil_data_specify()->result();
		$this->load->view('admin/export',$data);
	}
	
}