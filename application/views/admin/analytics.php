<?php
	include 'analytics_report.php';
	include 'header.php';

?>

<br><br>
<div class="container" id="DivIdToPrint">
<div class="col-lg-6" style="float: left;">
	<h3>INQUIRY REPORT</h3><br><br><br><br><br>
	<div class="m-b-30">
		<div class="col-md-12">
			<div id="piechart_all_inquiry"></div>
		</div>
		<br>
		<div class="col-md-12">
			<div id="piechart_month_inquiry"></div>
		</div><br>
		<div class="col-md-12">
			<div id="columnchart_year_inquiry"></div>
		</div><br>
		<div class="col-md-12">
			<div id="columnchart_month_inquiry"></div>
		</div>
	</div>
</div>
<div class="b col-lg-6" style="float: left;">
	<h3>SALES REPORT</h3><br><br><br><br><br>
	<div class="m-b-30">
		<div class="col-md-12">
			<div id="columnchart_po_sales_inquiry"></div>
		</div><br>
		<div class="col-md-12">
			<div id="columnchart_sudah_quote_sales_inquiry"></div>
		</div><br>
		<div class="col-md-12">
			<div id="columnchart_belum_quote_sales_inquiry"></div>
		</div><br>
		<div class="col-md-12">
			<div id="columnchart_close_sales_inquiry"></div>
		</div>
	</div>
</div>
</div>
<a class="btn btn-info buttons" style="color: #fff; margin-left:60px;" onclick="printDiv();">CETAK</a>
<script>
	function printDiv() 
	{

	  var divToPrint=document.getElementById('DivIdToPrint');

	  var newWin=window.open('','Print-Window');

	  newWin.document.open();

	  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

	  newWin.document.close();

	  setTimeout(function(){newWin.close();},10);

	}
</script>
<div class="clearfix"></div>
<div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © <?php echo date('Y'); ?> Testindo. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
	include 'footer.php';
?>