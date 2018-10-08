<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data.xls");
?>
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <h1>PT TESTINDO</h1>
        <h1></h1>
        <h4>Sales name : <?php echo $_SESSION['nama_user'] ?></h4>
        <h1></h1>
        <h4>Date : <?php echo date('Y-m-d') ?></h4>
        <h1></h1>
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
                </tr>
                <?php
                $no ++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>