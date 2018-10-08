<?php
    include 'header.php';
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">data purchasing order</h3>
                                <div class="table-responsive table--no-card m-b-30" id="DivIdToPrint">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Checkbox</th>
                                                <th>Nomor</th>
                                                <th>Nomor Surat PO</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Tanggal PO</th>
                                                <th>Tanggal Deadline</th>
                                                <th>Sales</th>
                                                <th>Nilai Quote</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                                <th>Update</th>
                                                <th>Status</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach($table_po as $u){
                                            ?>
                                            <tr>
                                                <form action="<?php echo base_url(); ?>admin/delete_po_active" method = "post">
                                                <td><input type="checkbox" name="nomor[]" value="<?php echo $u->nomor; ?>"></td>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $u->nomor_po; ?></td>
                                                <td><?php echo $u->nama_kantor_klien; ?></td>
                                                <td><?php echo $u->tanggal_update_inquiry; ?></td>
                                                <td><?php echo $u->tanggal_deadline; ?></td>
                                                <td><?php echo $u->nama_user; ?></td>
                                                <td><?php echo $u->nilai_quote_inquiry; ?></td>
                                                <td><?php echo $u->discount; ?></td>
                                                <td><?php $a = $u->nilai_quote_inquiry * ($u->discount / 100); echo $u->nilai_quote_inquiry - $a ; ?></td>
                                                <td><?php echo $u->update_purchasing_order; ?></td>
                                                <td><?php echo $u->keterangan_status_purchasing_order; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo 'edit_po/'.$u->nomor ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a onclick="javascript: return confirm('Anda yakin hapus ?')" href="<?php echo 'delete_po/'.$u->nomor?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                                        
                                         <input type="submit" name="remove" value = "Delete" class = "btn btn-danger btn-lg pull-left" style="margin-bottom: 20px;" />
                                        </form>
                                    </table>

                                </div>
                            </div>
                            <h2 style="display: block; width: 100%; margin-left: 20px; margin-bottom: 10px;">Find and Export</h2>
                            <form action="<?php echo base_url(); ?>admin/export_po" method="post" style="width: 100%; margin-left: 20px;">
                                <h4>Date form</h4>
                                <input class=" form-control-label" type="date" name="date1"><br><br>
                                <h4>Date until</h4>
                                <input class=" form-control-label" type="date" name="date2"><br><br>
                                <div class="form-group">
                                <label for="select" class=" form-control-label">Sales</label>
                                <select name="kode_user" id="kode_user" class="form-control" required="" style="width: 180px;">
                                    <option value="all">Semua</option>
                                    <?php
                                    foreach ($user as $u) {
                                    ?>
                                    <option value="<?php echo $u->kode_user ?>"><?php echo $u->nama_user ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                                <button type="submit" class="btn btn-info">LIHAT DATA</button>
                            </form>
                            
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