<?php
include 'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url(). 'admin/edit_inquiry_data'; ?>" method="post">
                        <div class="card-body card-block">
                            <?php
                            foreach ($table_inquiry as $u) {
                            ?>
                            <div class="form-group">
                                <label for="select" class=" form-control-label">Jenis Dokumen</label>
                                <select name="kode_jenis" id="kode_jenis" class="form-control" onchange="jenis(kode_jenis)" required="">
                                    <option value="<?php echo $u->kode_jenis ?>"><?php echo $u->keterangan_jenis ?></option>
                                    <?php
                                    foreach ($table_jenis as $j) {
                                    ?>
                                    <option value="<?php echo $j->kode_jenis ?>"><?php echo $j->keterangan_jenis ?></option>
                                    <?php } ?>
                                </select>
                                <script>
                                function jenis(opt){
                                var jenis=opt.value;
                                document.getElementById('kode_jenis_2').value = jenis;
                                document.getElementById('kode_jenis_3').value = jenis;
                                }
                                </script>
                                <label class=" form-control-label"></label><input type="text" id="kode_jenis_2" name="kode_jenis_2" class="form-control" readonly="" value="<?php echo $u->kode_jenis ?>">
                            </div>
                            <div class="form-group">
                                <label for="select" class=" form-control-label">Web Terkait</label>
                                <select name="kode_website" id="kode_website" class="form-control" onchange="website(kode_website)" required="">
                                    <option value="<?php echo $u->kode_website ?>"><?php echo $u->keterangan_website ?></option>
                                    <?php
                                    foreach ($table_website as $j) {
                                    ?>
                                    <option value="<?php echo $j->kode_website ?>"><?php echo $j->keterangan_website ?></option>
                                    <?php } ?>
                                </select>
                                <script>
                                function website(opt){
                                var website=opt.value;
                                document.getElementById('kode_website_2').value = website;
                                document.getElementById('kode_website_3').value = website;
                                }
                                </script>
                                <label class=" form-control-label"></label><input type="text" id="kode_website_2" name="kode_website_2" class="form-control" readonly="" value="<?php echo $u->kode_website ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Bulan</label>
                                <input type="text" id="bulan_inquiry" name="bulan_inquiry" class="form-control" value="<?php echo $u->bulan_inquiry ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Nomor Urut</label>
                                <input type="text" id="nomor_urut_inquiry" name="nomor_urut_inquiry" class="form-control" value="<?php echo $u->nomor_urut_inquiry ;?>" readonly="">
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class=" form-control-label">Nomor Surat</label><Br>
                                    <div class="col-md-3" style="float: left;">
                                        <input class="form-control" type="text" readonly="" value="<?php echo $u->kode_jenis ?>">
                                    </div>
                                    <div class="col-md-3" style="float: left;">
                                        <input class="form-control" type="text" readonly="" value="<?php echo $u->kode_website ?>">
                                    </div>
                                    <div class="col-md-3" style="float: left;">
                                        <input class="form-control" type="text" readonly="" value="<?php echo $u->bulan_inquiry ;?>">
                                    </div>
                                    <div class="col-md-3" style="float: left;">
                                        <input class="form-control" type="text" readonly="" value="<?php echo $u->nomor_urut_inquiry ;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Kebutuhan</label>
                                <textarea id="kebutuhan_inquiry" name="kebutuhan_inquiry" class="form-control" rows="5" id="comment"><?php  echo $u->kebutuhan_inquiry ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="select" class=" form-control-label">Nama Kantor</label>
                                <select name="kode_kantor_klien" id="kode_kantor_klien" class="form-control" required="">
                                    <option value="<?php echo $u->kode_kantor_klien ?>"><?php echo $u->nama_kantor_klien ?></option>
                                    <?php
                                    foreach ($table_klien as $j) {
                                    ?>
                                    <option value="<?php echo $j->kode_kantor_klien ?>"><?php echo $j->nama_kantor_klien ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Nama Klien</label>
                                <input  type="text" id="nama_klien" name="nama_klien" class="form-control"  value="<?php echo $u->nama_klien ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Telepon Klien</label>
                                <input type="text" id="telepon_klien" name="telepon_klien" class="form-control"  value="<?php echo $u->telepon_klien ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Email Klien</label>
                                <input type="text" id="email_klien" name="email_klien" class="form-control"value="<?php echo $u->email_klien ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Tanggal Input</label>
                                <input type="date" id="tanggal_input_inquiry" name="tanggal_input_inquiry" class="form-control" readonly="" value="<?php echo $u->tanggal_input_inquiry ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Tanggal Update</label>
                                <input type="date" id="tanggal_update_inquiry" name="tanggal_update_inquiry" class="form-control" readonly="" value="<?php echo date('Y-m-d') ?>">
                            </div>
                            <div class="form-group">
                                <label for="select" class=" form-control-label">Status</label>
                                <select name="kode_status" id="kode_status" class="form-control" required="">
                                    <option value="<?php echo $u->kode_status ?>"><?php echo $u->keterangan_status ?></option>
                                    <?php
                                    foreach ($table_status as $j) {
                                    ?>
                                    <option value="<?php echo $j->kode_status ?>"><?php echo $j->keterangan_status ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Nilai Quote</label>
                                <input type="text" id="nilai_quote_inquiry" name="nilai_quote_inquiry" class="form-control" value="<?php echo $u->nilai_quote_inquiry ?>">
                            </div>
                            <div class="form-group">
                                <label for="select" class=" form-control-label">Sales</label>
                                <select name="kode_user" id="kode_user" class="form-control" required="">
                                    <option value="<?php echo $u->kode_user ?>"><?php echo $u->nama_user ?></option>
                                    <?php
                                    foreach ($table_user as $j) {
                                    ?>
                                    <option value="<?php echo $j->kode_user ?>"><?php echo $j->nama_user ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                             <div class="form-group">
                                <label class=" form-control-label">Nomor PO</label>
                                <input type="text" id="nomor_po" name="nomor_po" class="form-control" value="<?php echo $u->nomor_po ?>">
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