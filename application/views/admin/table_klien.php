<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <?php
            if ($_SESSION['level'] != "admin"){}else{
            ?>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">data klien</h3>
                    <div class="table-data__tool-right">
                        <a href="<?php echo base_url();?>admin/add_klien" class="au-btn au-btn-icon au-btn--green au-btn--small button">
                        <i class="zmdi zmdi-plus"></i>add klien</button></a>
                    </div>
                    <br>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Kantor Klien</th>
                                    <th>Nama Kantor Klien</th>
                                    <th>Alamat Kantor Klien</th>
                                    <th>Telepon Kantor Klien</th>
                                    <th>Industri</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($klien as $u){
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $u->kode_kantor_klien; ?></td>
                                    <td><?php echo $u->nama_kantor_klien; ?></td>
                                    <td><?php echo $u->alamat_kantor_klien; ?></td>
                                    <td><?php echo $u->telepon_kantor_klien; ?></td>
                                    <td><?php echo $u->keterangan_industri; ?></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="<?php echo 'edit_klien/'.$u->nomor_klien ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a onclick="javascript: return confirm('Anda yakin hapus ?')" href="<?php echo 'delete_klien/'.$u->nomor_klien?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $no ++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>