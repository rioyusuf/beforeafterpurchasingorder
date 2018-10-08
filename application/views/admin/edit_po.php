<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url(). 'admin/edit_po_data'; ?>" method="post">
                        <div class="card-body card-block">
                            <?php foreach ($table_po as $u) {?>
                            <div class="form-group" style="display: none;">
                                <label class=" form-control-label">Nomor</label>
                                <input type="text" id="nomor" name="nomor" class="form-control" value="<?php echo $u->nomor ;?>" readonly="">
                            </div>
                            <div class="form-group" style="display: none;">
                                <label class=" form-control-label">Nomor Urut</label>
                                <input type="text" id="nomor_urut_inquiry" name="nomor_urut_inquiry" class="form-control" value="<?php echo $u->nomor_urut_inquiry ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Nomor Surat</label>
                                <input type="text" id="nomor_surat_inquiry" name="nomor_surat_inquiry" class="form-control" value="<?php echo $u->nomor_surat_inquiry ;?>" readonly="">
                            </div>
                             <div class="form-group">
                                <label class=" form-control-label">Nomor PO</label>
                                <input type="text" id="nomor_po" name="nomor_po" class="form-control" value="<?php echo $u->nomor_po ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Tanggal PO</label>
                                <input type="date" id="tanggal_update_inquiry" name="tanggal_update_inquiry" class="form-control" value="<?php echo $u->tanggal_update_inquiry ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Tanggal Deadline</label>
                                <input type="date" id="tanggal_deadline" name="tanggal_deadline" class="form-control" value="<?php echo $u->tanggal_deadline ;?>">
                            </div>
                            <div class="form-group">
                                <label for="select" class=" form-control-label">Nama Kantor</label>
                                <select name="kode_kantor_klien" id="kode_kantor_klien" class="form-control" required="" readonly="">
                                    <option value="<?php echo $u->kode_kantor_klien ?>"><?php echo $u->nama_kantor_klien ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" style="display: none;">Kode Status</label>
                                <input type="text" id="kode_status" name="kode_status" class="form-control" value="<?php echo $u->kode_status ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Status</label>
                                <input type="text" id="keterangan_status" name="keterangan_status" class="form-control" value="<?php echo $u->keterangan_status ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" style="display: none;">Kode Sales</label>
                                <input type="text" id="kode_user" name="kode_user" class="form-control" value="<?php echo $u->kode_user ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Sales</label>
                                <input type="text" id="nama_user" name="nama_user" class="form-control" value="<?php echo $u->nama_user ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Update</label>
                                <textarea type="text" id="update_purchasing_order" name="update_purchasing_order" class="form-control"><?php echo $u->update_purchasing_order ;?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="select" class=" form-control-label">Progress</label>
                                <select name="kode_status_purchasing_order" id="kode_status_purchasing_order" class="form-control" required="">
                                    <option value="<?php echo $u->kode_status_purchasing_order ?>"><?php echo $u->keterangan_status_purchasing_order ?></option>
                                    <?php
                                    foreach ($status_purchasing_order as $a) {
                                    ?>
                                    <option value="<?php echo $a->kode_status_purchasing_order ?>"><?php echo $a->keterangan_status_purchasing_order ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Nilai Quote PO</label>
                                <input type="text" id="nilai_quote_inquiry" name="nilai_quote_inquiry" class="form-control" value="<?php echo $u->nilai_quote_inquiry ;?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Discount</label>
                                <input type="text" id="discount" name="discount" class="form-control" value="<?php echo $u->discount ;?>" >
                            </div>
                            <div class="form-group">
                                <div>
                                    <?php } ?>
                                    <button id="save" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-save fa-lg"></i>&nbsp;
                                    <span id="save">Submit</span>
                                    </button>
                                    <button id="cancel" type="reset" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-close fa-lg"></i>&nbsp;
                                    <span id="cancel">Reset</span>
                                    </button>
                                </div>
                            </div>
                        </form>
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