<!-- Jquery JS-->
<script src="<?php echo base_url();?>assets/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url();?>assets/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url();?>assets/vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url();?>assets/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url();?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js">
</script>
<!-- Main JS-->
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
	text{
		font-family: "Poppins", sans-serif !important;
	}
	#piechart_all_inquiry, #piechart_month_inquiry, #columnchart_year_inquiry, #columnchart_month_inquiry, #columnchart_po_sales_inquiry, #columnchart_sudah_quote_sales_inquiry, #columnchart_belum_quote_sales_inquiry, #columnchart_close_sales_inquiry {
		    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
	}
</style>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Hours per Day'],
['Sudah PO', <?php echo $query_po->num_rows(); ?> ],
['Sudah Quote', <?php echo $query_sudah_quote->num_rows(); ?>],
['Belum Quote', <?php echo $query_belum_quote->num_rows(); ?>],
['Close/Gagal', <?php echo $query_close->num_rows(); ?>],
]);
var options = {
title: 'Total Inquiry (ALL TIME)'
};
var chart = new google.visualization.PieChart(document.getElementById('piechart_all_inquiry'));
chart.draw(data, options);

}
</script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Hours per Day'],
['Sudah PO', <?php echo $query_po_m->num_rows(); ?>],
['Sudah Quote', <?php echo $query_sudah_quote_m->num_rows(); ?>],
['Belum Quote', <?php echo $query_belum_quote_m->num_rows(); ?>],
['Close/Gagal', <?php echo $query_close_m->num_rows(); ?>],
]);
var options = {
title: 'Total Inquiry on this month'
};
var chart = new google.visualization.PieChart(document.getElementById('piechart_month_inquiry'));
chart.draw(data, options);
}
</script>
<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Element", "Inq Masuk", { role: "style" } ],
["2018", <?php echo $query_y_1->num_rows(); ?>, "#b87333"],
["2019", <?php echo $query_y_2->num_rows(); ?>, "silver"],
["2020", <?php echo $query_y_3->num_rows(); ?>, "gold"],
["2021", <?php echo $query_y_4->num_rows(); ?>, "#b87333"]
]);
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{ calc: "stringify",
sourceColumn: 1,
type: "string",
role: "annotation" },
2]);
var options = {
title: "Total Inquiry by years",
//width: 600,
//height: 400,
bar: {groupWidth: "95%"},
legend: { position: "none" },
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_year_inquiry"));
chart.draw(view, options);
}
</script>
<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Element", "Inq Masuk", { role: "style" } ],
["Jan", <?php echo $query_01->num_rows(); ?>, "#b87333"],
["Feb", <?php echo $query_02->num_rows(); ?>, "silver"],
["Mar", <?php echo $query_03->num_rows(); ?>, "gold"],
["Apr", <?php echo $query_04->num_rows(); ?>, "#b87333"],
["Mei", <?php echo $query_05->num_rows(); ?>, "silver"],
["Jun", <?php echo $query_06->num_rows(); ?>, "gold"],
["Jul", <?php echo $query_07->num_rows(); ?>, "color: #e5e4e2"],
["Aug", <?php echo $query_08->num_rows(); ?>, "#b87333"],
["Sep", <?php echo $query_09->num_rows(); ?>, "silver"],
["Okt", <?php echo $query_10->num_rows(); ?>, "gold"],
["Nov", <?php echo $query_11->num_rows(); ?>, "color: #e5e4e2"],
["Dec", <?php echo $query_12->num_rows(); ?>, "#b87333"]
]);
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{ calc: "stringify",
sourceColumn: 1,
type: "string",
role: "annotation" },
2]);
var options = {
title: "Total Inquiry by month",
//width: 600,
//height: 400,
bar: {groupWidth: "95%"},
legend: { position: "none" },
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_month_inquiry"));
chart.draw(view, options);
}
</script>

<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Element", "Inquiry", { role: "style" } ],
["Anto", <?php echo $query_sales_anto_po->num_rows(); ?>, "#b87333"],
["Faoji", <?php echo $query_sales_faoji_po->num_rows(); ?>, "silver"],
["Fajar", <?php echo $query_sales_fajar_po->num_rows(); ?>, "gold"],
["Mashudi", <?php echo $query_sales_mashudi_po->num_rows(); ?>, "#b87333"],
["Okta", <?php echo $query_sales_okta_po->num_rows(); ?>, "silver"],
["Richo", <?php echo $query_sales_richo_po->num_rows(); ?>, "gold"],
["Zulfikri", <?php echo $query_sales_zulfikri_po->num_rows(); ?>, "color: #e5e4e2"],
["Zulmailis", <?php echo $query_sales_zulmailis_po->num_rows(); ?>, "#b87333"],
]);
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{ calc: "stringify",
sourceColumn: 1,
type: "string",
role: "annotation" },
2]);
var options = {
title: "Total PO - Sales Inquiry on this month",
//width: 600,
//height: 400,
bar: {groupWidth: "95%"},
legend: { position: "none" },
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_po_sales_inquiry"));
chart.draw(view, options);
}
</script>

<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Element", "Inquiry", { role: "style" } ],
["Anto", <?php echo $query_sales_anto_sudah_quote->num_rows(); ?>, "#b87333"],
["Faoji", <?php echo $query_sales_faoji_sudah_quote->num_rows(); ?>, "silver"],
["Fajar", <?php echo $query_sales_fajar_sudah_quote->num_rows(); ?>, "gold"],
["Mashudi", <?php echo $query_sales_mashudi_sudah_quote->num_rows(); ?>, "#b87333"],
["Okta", <?php echo $query_sales_okta_sudah_quote->num_rows(); ?>, "silver"],
["Richo", <?php echo $query_sales_richo_sudah_quote->num_rows(); ?>, "gold"],
["Zulfikri", <?php echo $query_sales_zulfikri_sudah_quote->num_rows(); ?>, "color: #e5e4e2"],
["Zulmailis", <?php echo $query_sales_zulmailis_sudah_quote->num_rows(); ?>, "#b87333"],
]);
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{ calc: "stringify",
sourceColumn: 1,
type: "string",
role: "annotation" },
2]);
var options = {
title: "Total Sudah Quote - Sales Inquiry on this month",
//width: 600,
//height: 400,
bar: {groupWidth: "95%"},
legend: { position: "none" },
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_sudah_quote_sales_inquiry"));
chart.draw(view, options);
}
</script>

<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Element", "Inquiry", { role: "style" } ],
["Anto", <?php echo $query_sales_anto_belum_quote->num_rows(); ?>, "#b87333"],
["Faoji", <?php echo $query_sales_faoji_belum_quote->num_rows(); ?>, "silver"],
["Fajar", <?php echo $query_sales_fajar_belum_quote->num_rows(); ?>, "gold"],
["Mashudi", <?php echo $query_sales_mashudi_belum_quote->num_rows(); ?>, "#b87333"],
["Okta", <?php echo $query_sales_okta_belum_quote->num_rows(); ?>, "silver"],
["Richo", <?php echo $query_sales_richo_belum_quote->num_rows(); ?>, "gold"],
["Zulfikri", <?php echo $query_sales_zulfikri_belum_quote->num_rows(); ?>, "color: #e5e4e2"],
["Zulmailis", <?php echo $query_sales_zulmailis_belum_quote->num_rows(); ?>, "#b87333"],
]);
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{ calc: "stringify",
sourceColumn: 1,
type: "string",
role: "annotation" },
2]);
var options = {
title: "Total Belum Quote - Sales Inquiry on this month",
//width: 600,
//height: 400,
bar: {groupWidth: "95%"},
legend: { position: "none" },
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_belum_quote_sales_inquiry"));
chart.draw(view, options);
}
</script>

<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Element", "Inquiry", { role: "style" } ],
["Anto", <?php echo $query_sales_anto_gagal->num_rows(); ?>, "#b87333"],
["Faoji", <?php echo $query_sales_faoji_gagal->num_rows(); ?>, "silver"],
["Fajar", <?php echo $query_sales_fajar_gagal->num_rows(); ?>, "gold"],
["Mashudi", <?php echo $query_sales_mashudi_gagal->num_rows(); ?>, "#b87333"],
["Okta", <?php echo $query_sales_okta_gagal->num_rows(); ?>, "silver"],
["Richo", <?php echo $query_sales_richo_gagal->num_rows(); ?>, "gold"],
["Zulfikri", <?php echo $query_sales_zulfikri_gagal->num_rows(); ?>, "color: #e5e4e2"],
["Zulmailis", <?php echo $query_sales_zulmailis_gagal->num_rows(); ?>, "#b87333"],
]);
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{ calc: "stringify",
sourceColumn: 1,
type: "string",
role: "annotation" },
2]);
var options = {
title: "Total Gagal - Sales Inquiry on this month",
//width: 600,
//height: 400,
bar: {groupWidth: "95%"},
legend: { position: "none" },
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_close_sales_inquiry"));
chart.draw(view, options);
}
</script>

</body>
</html>
<!-- end document-->