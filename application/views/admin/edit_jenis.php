<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach ($table_jenis as $u) { ?>
                    <form action="<?php echo base_url(). 'admin/edit_jenis_data'; ?>" method="post">
                        <div class="form-group" style="display: none;">
                            <label class=" form-control-label">Nomor Jenis</label>
                            <input type="text" id="nomor_jenis" name="nomor_jenis" class="form-control" value="<?php echo $u->nomor_jenis ?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Kode Jenis</label>
                            <input type="text" id="kode_jenis" name="kode_jenis" class="form-control" maxlength="3" required="" value="<?php echo $u->kode_jenis ?>" style="text-transform:uppercase">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Keterangan Jenis</label>
                            <input type="text" id="keterangan_jenis" name="keterangan_jenis" class="form-control" required="" value="<?php echo $u->keterangan_jenis ?>">
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
                    </form>
                    <?php } ?>
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