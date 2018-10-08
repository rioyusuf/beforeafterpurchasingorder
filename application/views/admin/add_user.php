<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url(). 'admin/add_user_data'; ?>" method="post">
                        <?php  foreach ($table_user as $u){ 
                        $a = $u->kode_user;
                        $b = substr($a,2);
                        $c = $b + 1;
                        $d = "SO000";
                        if ($c > 9 ) {
                            $d = "SO00";
                        }
                        elseif ($c > 99 ){
                            $d = "SO0";
                        }
                        elseif ($c > 999 ){
                            $d = "SO";
                        }
                        ?>
                        <div class="form-group">
                            <label class=" form-control-label">Kode User</label>
                            <input type="text" id="kode_user" name="kode_user" class="form-control" maxlength="3" required="" readonly="" value="<?php echo $d; echo $c;?>">
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <label class=" form-control-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Password</label>
                            <input type="text" id="password" name="password" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Full Name</label>
                            <input type="text" id="nama_user" name="nama_user" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="level" class=" form-control-label">Level</label>
                            <select name="level" id="level" class="form-control" required="">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
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