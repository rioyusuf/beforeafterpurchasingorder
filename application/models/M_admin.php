<?php

class M_admin extends CI_Model{

	function data_inquiry(){
		if ($_SESSION['level'] == "admin") {
			$this->db->where('kode_jenis',"INQ");
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_inquiry');
		}
		else{
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->where('kode_jenis',"INQ");
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_inquiry');
		}
		
	}
	function data_quote(){
		if ($_SESSION['level'] == "admin") {
			$this->db->where('kode_jenis',"QUO");
			$this->db->where('kode_status !=',"SP");
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_inquiry');
		}
		else{
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->where('kode_jenis',"QUO");
			$this->db->where('kode_status !=',"SP");
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_inquiry');
		}
		
	}
	function data_po(){
		if ($_SESSION['level'] == "admin") {
			$this->db->where('kode_status',"SP");
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_purchasing_order');
		}
		else{
			$this->db->where('kode_user',"$_SESSION[kode_user]");
			$this->db->where('kode_status',"SP");
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_purchasing_order');
		}
		
	}

	function data_po_date(){
		if ($_SESSION['level'] == "admin") {
			$a = $this->input->post('date1');
			$b = $this->input->post('date2');
			$c = $this->input->post('kode_user');
			$this->db->where('tanggal_update_inquiry BETWEEN "'. date('Y-m-d', strtotime($a)). '" and "'. date('Y-m-d', strtotime($b)).'"');
			if($c == "all"){
			$_SESSION['privillage'] = "all";
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_purchasing_order');
			}else{
			$_SESSION['privillage'] = "nall";
			$this->db->where('kode_user', $c);
			$this->db->order_by('nomor_urut_inquiry','desc');
			$this->db->limit('500');
			return $this->db->get('table_purchasing_order');
			}
		}
		
	}
	function data_jenis(){
		$this->db->order_by('nomor_jenis','desc');
		return $this->db->get('table_jenis');
		
	}
	function data_website(){
		$this->db->order_by('nomor_website','desc');
		return $this->db->get('table_website');
		
	}
	function data_klien(){
		$this->db->order_by('nomor_klien','desc');
		return $this->db->get('table_klien');
		
	}
	function data_sales(){
		$this->db->order_by('nomor_user','desc');
		return $this->db->get('table_user');
		
	}
	function data_status(){
		$this->db->order_by('nomor_status','desc');
		return $this->db->get('table_status');
		
	}
	function data_status_purchasing_order(){
		$this->db->order_by('nomor_status','asc');
		return $this->db->get('table_status_purchasing_order');
		
	}
	function data_prog(){
		$this->db->order_by('nomor_prog','asc');
		return $this->db->get('table_prog');
		
	}
	function data_industri(){
		$this->db->order_by('nomor_industri','asc');
		return $this->db->get('table_industri');
		
	}
	function add_inquiry_data(){
		$this->db->order_by('nomor_urut_inquiry','desc');
		$this->db->limit('1');
		return $this->db->get('table_inquiry');
		
	}
	function add_klien_data(){
		$this->db->order_by('nomor_klien','desc');
		$this->db->limit('1');
		return $this->db->get('table_klien');
		
	}
	function add_user_data(){
		$this->db->order_by('nomor_user','desc');
		$this->db->limit('1');
		return $this->db->get('table_user');
		
	}
	function add_status_data(){
		$this->db->order_by('nomor_status','desc');
		$this->db->limit('1');
		return $this->db->get('table_status');
		
	}
	function add_status_po_data(){
		$this->db->order_by('nomor_status','desc');
		$this->db->limit('1');
		return $this->db->get('table_status_purchasing_order');
		
	}
	function add_prog_data(){
		$this->db->order_by('nomor_prog','desc');
		$this->db->limit('1');
		return $this->db->get('table_prog');
		
	}
	function add_industri_data(){
		$this->db->order_by('nomor_industri','desc');
		$this->db->limit('1');
		return $this->db->get('table_industri');
		
	}
	function add_all_data($where, $table){
		return $this->db->insert($table,$where);
	}
		function edit_all_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function save_edit_all_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function delete_all_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function deleteUser($datas)
	{
	    if (!empty($datas)) {
	        $this->db->where_in('nomor', $datas);
	        $this->db->delete('table_purchasing_order');
	    }
	}
	function tampil_data()
	{
		if ($_SESSION['level'] == "admin") {
			$this->db->order_by('nomor_urut_inquiry','desc');
			return $this->db->get('table_inquiry');
		}
		else{
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->order_by('nomor_urut_inquiry','desc');
			return $this->db->get('table_inquiry');
		}
	}
	function tampil_data_sudah_po()
	{
		if ($_SESSION['level'] == "admin") {
			$this->db->where('keterangan_status','sudah po');
			return $this->db->get('table_inquiry');
		}
		else{
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->where('keterangan_status','sudah po');
			return $this->db->get('table_inquiry');
		}
	}
	function tampil_data_sudah_quote()
	{
		if ($_SESSION['level'] == "admin") {
			$this->db->where('keterangan_status','sudah quote');
			return $this->db->get('table_inquiry');
		}
		else{
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->where('keterangan_status','sudah quote');
			return $this->db->get('table_inquiry');
		}
	}
	function tampil_data_belum_quote()
	{
		if ($_SESSION['level'] == "admin") {
			$this->db->where('keterangan_status','belum quote');
			return $this->db->get('table_inquiry');
		}
		else{
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->where('keterangan_status','belum quote');
			return $this->db->get('table_inquiry');
		}
	}
	function tampil_data_close()
	{
		if ($_SESSION['level'] == "admin") {
			$this->db->where('keterangan_status','close/gagal');
			return $this->db->get('table_inquiry');
		}
		else{
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->where('keterangan_status','close/gagal');
			return $this->db->get('table_inquiry');
		}
	}
	function tampil_data_date()
	{
		if ($_SESSION['level'] == "admin") {
			$a = $this->input->post('dat');
			$b = $this->input->post('dat2');
			$this->db->where('tanggal_input_inquiry BETWEEN "'. date('Y-m-d', strtotime($a)). '" and "'. date('Y-m-d', strtotime($b)).'"');
			return $this->db->get('table_inquiry');
		}
		else{
			$a = $this->input->post('dat');
			$b = $this->input->post('dat2');
			$this->db->where('nama_user',"$_SESSION[nama_user]");
			$this->db->where('tanggal_input_inquiry BETWEEN "'. date('Y-m-d', strtotime($a)). '" and "'. date('Y-m-d', strtotime($b)).'"');
			return $this->db->get('table_inquiry');
		}
	}
	function tampil_data_specify()
	{
		
	if($_POST['keterangan_status'] == "Semua"){
	$a = $this->input->post('dat');
			$b = $this->input->post('dat2');
			$d = $this->input->post('nama_user');
			$this->db->where('tanggal_input_inquiry BETWEEN "'. date('Y-m-d', strtotime($a)). '" and "'. date('Y-m-d', strtotime($b)).'"');
			$this->db->where('nama_user',$this->input->post('nama_user'));
			return $this->db->get('table_inquiry');
	
	}
	else{
			$a = $this->input->post('dat');
			$b = $this->input->post('dat2');
			$c = $this->input->post('prog_stat');
			$d = $this->input->post('nama_user');
			$this->db->where('tanggal_input_inquiry BETWEEN "'. date('Y-m-d', strtotime($a)). '" and "'. date('Y-m-d', strtotime($b)).'"');
			$this->db->where('keterangan_status', $this->input->post('prog_stat'));
			$this->db->where('nama_user',$this->input->post('nama_user'));
			return $this->db->get('table_inquiry');
	}
	}
}