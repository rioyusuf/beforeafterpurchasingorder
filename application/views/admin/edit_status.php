<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url(). 'admin/edit_status_data'; ?>" method="post">
                        <?php  foreach ($table_status as $u){ 
                        ?>
                        <div class="form-group" style="display: none;">
                            <label class=" form-control-label">Nomor Status</label>
                            <input type="text" id="nomor_status" name="nomor_status" class="form-control" required="" readonly="" value="<?php echo $u->nomor_status;?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Kode Status</label>
                            <input type="text" id="kode_status" name="kode_status" class="form-control" required="" readonly="" value="<?php echo $u->kode_status;?>">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Keterangan Status</label>
                            <input type="text" id="keterangan_status" name="keterangan_status" class="form-control" required="" value="<?php echo $u->keterangan_status;?>">
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