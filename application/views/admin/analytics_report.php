<?php
$t=date('Y');
$b=date('m');
//ALL
$query = $this->db->query("SELECT * FROM table_inquiry");
$query_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote'");
$query_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote'");
$query_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO'");
$query_close = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal'");

//THIS MONTH
$query_m = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)='$b' and year(tanggal_input_inquiry)='$t'");
$query_sudah_quote_m = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)='$b' and year(tanggal_input_inquiry)='$t' and keterangan_status = 'Sudah Quote'");
$query_belum_quote_m = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)='$b' and year(tanggal_input_inquiry)='$t' and keterangan_status = 'Belum Quote'");
$query_po_m = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'Sudah PO'");
$query_close_m = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)='$b' and year(tanggal_input_inquiry)='$t' and keterangan_status = 'Gagal'");
//ALL YEAR
$query_y_1 = $this->db->query("SELECT * FROM table_inquiry where year(tanggal_input_inquiry)='2018'");
$query_y_2 = $this->db->query("SELECT * FROM table_inquiry where year(tanggal_input_inquiry)='2019'");
$query_y_3 = $this->db->query("SELECT * FROM table_inquiry where year(tanggal_input_inquiry)='2020'");
$query_y_4 = $this->db->query("SELECT * FROM table_inquiry where year(tanggal_input_inquiry)='2021'");

//YEAR
$query_01 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=01 and year(tanggal_input_inquiry)='$t'");
$query_02 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=02 and year(tanggal_input_inquiry)='$t'");
$query_03 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=03 and year(tanggal_input_inquiry)='$t'");
$query_04 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=04 and year(tanggal_input_inquiry)='$t'");
$query_05 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=05 and year(tanggal_input_inquiry)='$t'");
$query_06 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=06 and year(tanggal_input_inquiry)='$t'");
$query_07 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=07 and year(tanggal_input_inquiry)='$t'");
$query_08 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=08 and year(tanggal_input_inquiry)='$t'");
$query_09 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=09 and year(tanggal_input_inquiry)='$t'");
$query_10 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=10 and year(tanggal_input_inquiry)='$t'");
$query_11 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=11 and year(tanggal_input_inquiry)='$t'");
$query_12 = $this->db->query("SELECT * FROM table_inquiry where month(tanggal_input_inquiry)=12 and year(tanggal_input_inquiry)='$t'");

//SALES
//po
//anto
$query_sales_anto_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0002'");
//faoji
$query_sales_faoji_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0003'");
//fajar
$query_sales_fajar_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0004'");
//mashudi
$query_sales_mashudi_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0005'");
//okta
$query_sales_okta_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0006'");
//richo
$query_sales_richo_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0007'");
//zulfikri
$query_sales_zulfikri_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0008'");
//zulmailis
$query_sales_zulmailis_po = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah PO' and kode_user = 'SO0009'");

//sudah quote
//anto
$query_sales_anto_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0002'");
//faoji
$query_sales_faoji_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0003'");
//fajar
$query_sales_fajar_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0004'");
//mashudi
$query_sales_mashudi_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0005'");
//okta
$query_sales_okta_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0006'");
//richo
$query_sales_richo_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0007'");
//zulfikri
$query_sales_zulfikri_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0008'");
//zulmailis
$query_sales_zulmailis_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Sudah Quote' and kode_user = 'SO0009'");

//belum quote
//anto
$query_sales_anto_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0002'");
//faoji
$query_sales_faoji_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0003'");
//fajar
$query_sales_fajar_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0004'");
//mashudi
$query_sales_mashudi_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0005'");
//okta
$query_sales_okta_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0006'");
//richo
$query_sales_richo_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0007'");
//zulfikri
$query_sales_zulfikri_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0008'");
//zulmailis
$query_sales_zulmailis_belum_quote = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Belum Quote' and kode_user = 'SO0009'");

//gagal
//anto
$query_sales_anto_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0002'");
//faoji
$query_sales_faoji_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0003'");
//fajar
$query_sales_fajar_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0004'");
//mashudi
$query_sales_mashudi_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0005'");
//okta
$query_sales_okta_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0006'");
//richo
$query_sales_richo_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0007'");
//zulfikri
$query_sales_zulfikri_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0008'");
//zulmailis
$query_sales_zulmailis_gagal = $this->db->query("SELECT * FROM table_inquiry where keterangan_status = 'Gagal' and kode_user = 'SO0009'");
?>