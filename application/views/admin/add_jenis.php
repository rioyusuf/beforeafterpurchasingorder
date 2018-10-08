<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url(). 'admin/add_jenis_data'; ?>" method="post">
                        <div class="form-group">
                            <label class=" form-control-label">Kode Jenis</label>
                            <input type="text" id="kode_jenis" name="kode_jenis" class="form-control" maxlength="3" required="" style="text-transform:uppercase">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Keterangan Jenis</label>
                            <input type="text" id="keterangan_jenis" name="keterangan_jenis" class="form-control" required="">
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