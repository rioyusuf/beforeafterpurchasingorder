<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url(). 'admin/edit_klien_data'; ?>" method="post">
                        <?php  foreach ($table_klien as $u){ 
                        ?>
                        <div class="form-group" style="display: none;">
                            <label class=" form-control-label">Nomor Klien</label>
                            <input type="text" id="nomor_klien" name="nomor_klien" class="form-control" maxlength="3" required="" readonly="" value="<?php echo $u->nomor_klien ?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Kode Kantor Klien</label>
                            <input type="text" id="kode_kantor_klien" name="kode_kantor_klien" class="form-control" maxlength="3" required="" readonly="" value="<?php echo $u->kode_kantor_klien ?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Nama Kantor Klien</label>
                            <input type="text" id="nama_kantor_klien" name="nama_kantor_klien" class="form-control" required="" value="<?php echo $u->nama_kantor_klien ?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Alamat Kantor Klien</label>
                            <input type="text" id="alamat_kantor_klien" name="alamat_kantor_klien" class="form-control" maxlength="3" required="" value="<?php echo $u->alamat_kantor_klien ?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Telepon Kantor Klien</label>
                            <input type="text" id="telepon_kantor_klien" name="telepon_kantor_klien" class="form-control" required="" value="<?php echo $u->telepon_kantor_klien ?>">
                        </div>
                        <div class="form-group">
                                <label for="select" class=" form-control-label">Nama Kantor</label>
                                <select name="kode_industri" id="kode_industri" class="form-control" required="">
                                    <option value="<?php echo $u->kode_industri ?>"><?php echo $u->keterangan_industri ?></option>
                                    <?php
                                    foreach ($table_industri as $a) {
                                    ?>
                                    <option value="<?php echo $a->kode_industri ?>"><?php echo $a->keterangan_industri ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        <div class="form-group">
                            <div>
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
                        <?php } ?>
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