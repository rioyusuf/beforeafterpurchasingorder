<?php
    include 'header.php';
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">data inquiry</h3>
                                <div class="table-data__tool-right">
                                    <a href="<?php echo base_url();?>admin/add_inquiry" class="au-btn au-btn-icon au-btn--green au-btn--small button">
                                    <i class="zmdi zmdi-plus"></i>add inquiry</button></a>
                                </div>
                                <br>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nomor Surat</th>
                                                <th>Tanggal Input</th>
                                                <th>Tanggal Update</th>
                                                <th>Status</th>
                                                <th>Kebutuhan</th>
                                                <th>Nilai Quote</th>
                                                <th>Nama Kantor Klein</th>
                                                <th>Alamat Kantor Klien</th>
                                                <th>Telepon Kantor</th>
                                                <th>Nama Klien</th>
                                                <th>Telepon Klien</th>
                                                <th>Email Klien</th>
                                                <th>Nama Sales</th>
                                                <th>Nomor PO</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach($table as $u){
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $u->nomor_surat_inquiry; ?></td>
                                                <td><?php echo $u->tanggal_input_inquiry; ?></td>
                                                <td><?php echo $u->tanggal_update_inquiry; ?></td>
                                                <td><?php echo $u->keterangan_status; ?></td>
                                                <td><?php echo $u->kebutuhan_inquiry; ?></td>
                                                <td><?php echo $u->nilai_quote_inquiry; ?></td>
                                                <td><?php echo $u->nama_kantor_klien; ?></td>
                                                <td><?php echo $u->alamat_kantor_klien; ?></td>
                                                <td><?php echo $u->telepon_kantor_klien; ?></td>
                                                <td><?php echo $u->nama_klien; ?></td>
                                                <td><?php echo $u->telepon_klien; ?></td>
                                                <td><?php echo $u->email_klien; ?></td>
                                                <td><?php echo $u->nama_user; ?></td>
                                                <td><?php echo $u->nomor_po; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo 'edit_inquiry/'.$u->nomor_urut_inquiry ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a onclick="javascript: return confirm('Anda yakin hapus ?')" href="<?php echo 'delete_inquiry/'.$u->nomor_urut_inquiry?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">data quotation</h3>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nomor Surat</th>
                                                <th>Tanggal Input</th>
                                                <th>Tanggal Update</th>
                                                <th>Status</th>
                                                <th>Kebutuhan</th>
                                                <th>Nilai Quote</th>
                                                <th>Nama Kantor Klein</th>
                                                <th>Alamat Kantor Klien</th>
                                                <th>Telepon Kantor</th>
                                                <th>Nama Klien</th>
                                                <th>Telepon Klien</th>
                                                <th>Email Klien</th>
                                                <th>Nama Sales</th>
                                                <th>Nomor PO</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach($table_quote as $u){
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $u->nomor_surat_inquiry; ?></td>
                                                <td><?php echo $u->tanggal_input_inquiry; ?></td>
                                                <td><?php echo $u->tanggal_update_inquiry; ?></td>
                                                <td><?php echo $u->keterangan_status; ?></td>
                                                <td><?php echo $u->kebutuhan_inquiry; ?></td>
                                                <td><?php echo $u->nilai_quote_inquiry; ?></td>
                                                <td><?php echo $u->nama_kantor_klien; ?></td>
                                                <td><?php echo $u->alamat_kantor_klien; ?></td>
                                                <td><?php echo $u->telepon_kantor_klien; ?></td>
                                                <td><?php echo $u->nama_klien; ?></td>
                                                <td><?php echo $u->telepon_klien; ?></td>
                                                <td><?php echo $u->email_klien; ?></td>
                                                <td><?php echo $u->nama_user; ?></td>
                                                <td><?php echo $u->nomor_po; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo 'edit_inquiry/'.$u->nomor_urut_inquiry ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a onclick="javascript: return confirm('Anda yakin hapus ?')" href="<?php echo 'delete_inquiry/'.$u->nomor_urut_inquiry?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                            </div>
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