<?php
include 'header.php';
?>
<!-- STATISTIC -->
<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if ($_SESSION['level'] == "admin"){
                ?>
                <h3 class="title-5 m-b-35">inquiry statistics this month (All Sales)</h3>
                <?php }else { ?>
                <h3 class="title-5 m-b-35">inquiry statistics this month</h3>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <?php
                    if ($_SESSION['level'] == "admin"){
                    $t=date('Y');
                    $b=date('m');
                    $query_gagal = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'QUO' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'gagal'");
                    $query_belum_quote = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'INQ' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'belum quote'");
                    $query_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'QUO' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'sudah quote'");
                    $query_po = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'QUO' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'sudah po'");
                    }else{
                    $t=date('Y');
                    $b=date('m');
                    $a = $_SESSION['nama_user'];
                    $query_gagal = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'QUO' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'gagal' and nama_user = '$a'");
                    $query_belum_quote = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'INQ' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'belum quote' and nama_user = '$a'");
                    $query_sudah_quote = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'QUO' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'sudah quote' and nama_user = '$a'");
                    $query_po = $this->db->query("SELECT * FROM table_inquiry where kode_jenis = 'QUO' and month(tanggal_input_inquiry)='$b' and year(tanggal_update_inquiry)='$t' and keterangan_status = 'sudah po' and nama_user = '$a'");
                    }
                    ?>
                    <h2 class="number"><?php echo $query_gagal->num_rows(); ?></h2>
                    <span class="desc">Gagal</span>
                    <div class="icon">
                        <i class="zmdi zmdi-close-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number"><?php echo $query_belum_quote->num_rows(); ?></h2>
                    <span class="desc">Belum Quote</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number"><?php echo $query_sudah_quote->num_rows(); ?></h2>
                    <span class="desc">Sudah Quote</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <h2 class="number"><?php echo $query_po->num_rows(); ?></h2>
                    <span class="desc">Sudah PO</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END STATISTIC -->
<!-- STATISTIC -->
<!-- <section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">inquiry statistics this year</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">10,368</h2>
                    <span class="desc">Gagal</span>
                    <div class="icon">
                        <i class="zmdi zmdi-close-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">388,688</h2>
                    <span class="desc">Belum Quote</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number">1,086</h2>
                    <span class="desc">Sudah Quote</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <h2 class="number">$1,060,386</h2>
                    <span class="desc">Sudah PO</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END STATISTIC CHART-->
<!-- COPYRIGHT-->
<section class="p-t-60 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © <?php echo date('Y');?> Colorlib. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END COPYRIGHT-->
</div>
</div>
<?php
include 'footer.php';
?>