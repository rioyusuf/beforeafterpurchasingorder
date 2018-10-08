<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach ($table_website as $u) { ?>
                    <form action="<?php echo base_url(). 'admin/edit_website_data'; ?>" method="post">
                        <div class="form-group" style="display: none;">
                            <label class=" form-control-label">Nomor Website</label>
                            <input type="text" id="nomor_website" name="nomor_website" class="form-control" value="<?php echo $u->nomor_website ?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Kode Website</label>
                            <input type="text" id="kode_website" name="kode_website" class="form-control" maxlength="3" required="" value="<?php echo $u->kode_website ?>" style="text-transform:uppercase">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Keterangan Website</label>
                            <input type="text" id="keterangan_website" name="keterangan_website" class="form-control" required="" value="<?php echo $u->keterangan_website ?>">
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