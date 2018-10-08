<?php
	include 'header.php';
?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="background-color : #fff; margin-bottom: 100px; padding: 20px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)">
					<h3 class="menu-title">MENU MASTER</h3><br><!-- /.menu-title -->
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_jenis" target="_blank"> <i class="menu-icon fa fa-table"></i>JENIS</a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_website" target="_blank"> <i class="menu-icon fa fa-table"></i>WEBSITE </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_klien" target="_blank"> <i class="menu-icon fa fa-table"></i>KLIEN </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_user" target="_blank"> <i class="menu-icon fa fa-table"></i>SALES </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_status" target="_blank"> <i class="menu-icon fa fa-table"></i>STATUS </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_industri" target="_blank"> <i class="menu-icon fa fa-table"></i>INDUSTRI </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_status_po" target="_blank"> <i class="menu-icon fa fa-table"></i>STATUS PO </a>
					</li>
					<li style="float: left; list-style: none; margin: 10px;">
						<a class="au-btn au-btn-icon au-btn--green au-btn--small button" href="<?php echo base_url();?>admin/table_progress" target="_blank"> <i class="menu-icon fa fa-table"></i>PROGRESS PO </a>
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