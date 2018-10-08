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
                    <h3 class="title-5 m-b-35">data status purchasing order</h3>
                    <div class="table-data__tool-right">
                        <a href="<?php echo base_url();?>admin/add_status_po" class="au-btn au-btn-icon au-btn--green au-btn--small button">
                        <i class="zmdi zmdi-plus"></i>add status po</button></a>
                    </div>
                    <br>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Status PO</th>
                                    <th>Keterangan Status PO</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($status_po as $u){
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $u->kode_status_purchasing_order; ?></td>
                                    <td><?php echo $u->keterangan_status_purchasing_order; ?></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="<?php echo 'edit_status_po/'.$u->nomor_status ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a onclick="javascript: return confirm('Anda yakin hapus ?')" href="<?php echo 'delete_status_po/'.$u->nomor_status?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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