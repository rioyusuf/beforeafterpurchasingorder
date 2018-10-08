<?php
    include 'header.php';
?>
            <?php
                error_reporting(0);
            ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">data purchasing order</h3>
                                <div class="table-responsive table--no-card m-b-30" id="DivIdToPrint">
                                    <div class="login-logo">
                                        
                                    <a href="#">
                                        <img src="<?php echo base_url();?>assets/images/icon/testindo_logo.png" alt="Testindo">
                                    </a><br><br>
                                    <div style="float: left; text-align: left; margin-right:200px !important;">
                                        Date : <?php echo date('Y-m-d'); ?><br>
                                        <?php
                                                    if($_SESSION['privillage'] == "all"){
                                                    ?>
                                                    <th>Sales : Semua</th>
                                                    <?php
                                                        }else{
                                                    ?>
                                                    <th>Sales : <?php echo $u->nama_user ?></th>  
                                                    <?php } ?>  <br>
                                        Exorter : <?php echo $_SESSION['username'] ?>
                                    </div>
                                    <div style=" text-align: left;">
                                        Report data :<br>
                                        From : <?php echo $date_1; ?><br>
                                        Until : <?php echo $date_2 ?>
                                    </div>
                                </div><br><br>
                                    <table class="table table-borderless table-striped table-earning" style="width: 100%;">
                                        <thead style="text-align: left;">
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor PO</th>
                                                <th>Perusahaan</th>
                                                <th>Sales</th>
                                                <th>Nilai</th>
                                                <th>Disc</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach($table_po as $u){
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $u->nomor_po; ?></td>
                                                <td><?php echo $u->nama_kantor_klien; ?></td>
                                                <td><?php echo $u->nama_user; ?></td>
                                                <td><?php echo $u->nilai_quote_inquiry; ?></td>
                                                <td><?php echo $u->discount; ?></td>
                                                <td><?php $a = $u->nilai_quote_inquiry * ($u->discount / 100); $b = $u->nilai_quote_inquiry - $a ; $azz = $u->nilai_quote_inquiry - $a ; echo number_format($azz, 0, ',', '.')?></td>
                                                
                                                <?php $c += $b ?>
                                            </tr>
                                            <?php
                                                    $no ++;
                                                }
                                            ?><br> <td></td><td></td><td></td><td></td><td></td><td style="font-weight: bold;">Jumlah PO :<br>Total PO :</td> <td><?php echo number_format($c, 0, ',', '.') ?><br><?php $count = count($table_po); echo $count ?></td>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <a class="btn btn-info buttons" href="<?php echo base_url(); ?>admin/export_po" style="color: #fff; margin-left:60px;" onclick="printDiv();">CETAK</a>
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
                        </div>
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