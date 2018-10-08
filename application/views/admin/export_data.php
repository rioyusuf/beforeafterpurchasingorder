<?php
	include 'header.php';
?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="background-color : #fff; margin-bottom: 100px; padding: 20px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)">
					<h3 class="menu-title">EXPORT ALL DATA</h3><br><!-- /.menu-title -->
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/export" target="_blank"> <i class="menu-icon fa fa-file-excel-o"></i>SEMUA DATA </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/export_sudah_po" target="_blank"> <i class="menu-icon fa fa-file-excel-o"></i>DATA SUDAH PO </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/export_sudah_quote" target="_blank"> <i class="menu-icon fa fa-file-excel-o"></i>DATA SUDAH QUOTE </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/export_belum_quote" target="_blank"> <i class="menu-icon fa fa-file-excel-o"></i>DATA BELUM QUOTE </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/export_close" target="_blank"> <i class="menu-icon fa fa-file-excel-o"></i>DATA CLOSE/GAGAL </a>
					</li>
				</div>
				<div class="col-md-5" style="background-color : #fff; margin-bottom: 100px; padding: 20px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)">
					<h3 class="menu-title">EXPORT BY DATE</h3><br><!-- /.menu-title -->
					<li style="list-style: none;">
						<form action="<?php echo base_url(). 'admin/export_date'; ?>" method="post">
							<div class="form-group"><label class=" form-control-label">Date from</label><input type="date" id="dat" name="dat" class="form-control"></div>
							<div class="form-group"><label class=" form-control-label">Date until</label><input type="date" id="dat2" name="dat2" class="form-control"></div>
							<button id="save" type="submit" class="btn btn-lg btn-success btn-block">
							<i class="fa fa-file-excel-o fa-lg"></i>&nbsp;
							<span id="save">EXPORT</span>
							</button>
						</form>
					</li>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6" style="background-color : #fff; margin-bottom: 100px; padding: 20px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)">
					<h3 class="menu-title">EXPORT BY SPECIFIC</h3><br><!-- /.menu-title -->
					<li style="list-style: none;">
						<form action="<?php echo base_url(). 'admin/export_specify'; ?>" method="post">
							<div class="form-group">
								<label class=" form-control-label">Date from</label>
								<input type="date" id="dat" name="dat" class="form-control">
							</div>
							<div class="form-group">
								<label class=" form-control-label">Date until</label>
								<input type="date" id="dat2" name="dat2" class="form-control"
								>
							</div>
							<div class="form-group">
                            <label for="select" class=" form-control-label">Status</label>
                            <select name="keterangan_status" id="keterangan_status" class="form-control" required="">
                                <option value="">Pilih</option>
                                <option>Semua</option>
                                <?php
                                foreach ($table_status as $u) {
                                ?>
                                <option value="<?php echo $u->keterangan_status ?>"><?php echo $u->keterangan_status ?></option>
                                <?php } ?>
                            </select>
                            </div>
							<div class="form-group">
                                <label for="select" class=" form-control-label">Sales</label>
                                <select name="nama_user" id="nama_user" class="form-control" required="">
                                    <option value="">Pilih</option>
                                    <?php
                                    foreach ($table_user as $u) {
                                    ?>
                                    <option value="<?php echo $u->nama_user ?>"><?php echo $u->nama_user ?></option>
                                    <?php } ?>
                                </select>
                            </div>
							<button id="save" type="submit" class="btn btn-lg btn-success btn-block">
							<i class="fa fa-save fa-lg"></i>&nbsp;
							<span id="save">EXPORT</span>
							</button>
						</form>
					</li>
				</div>
			</div>
		</div>
	</div>
</div><br><br>
<div class="row">
	<div class="col-md-12">
		<div class="copyright">
			<p>Copyright © <?php echo date('Y'); ?> Testindo. All rights reserved.</p>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>