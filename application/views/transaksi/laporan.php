<title>Laporan Transaksi</title>
<h3>Laporan Transaksi</h3>
<?php
echo form_open('transaksi/laporan');
?>
<a href='delete' class='btn btn-danger btn-sm'>Kosongkan</a>
<br>
<br>
<br>
<div class="module">
<div class="module-head">
<h3>Table Data Transaksi Minggu Ini</h3>
</div>
<div class="module-body table">
<table cellpadding="0" cellspacing="0" border="0" id="table1" class="datatable-1 table table-bordered table-striped  display" width="100%">
    <tbody>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->tanggal_transaksi</td>
            <td>$r->nama_lengkap</td>
            <td>$r->total</td>
            </tr>";
        $no++;
        $total=$total+$r->total;
    }
    ?>
</tbody>
<thead><tr><b><td colspan="3"><b>Total keseluruhan transaksi minggu ini</b></td><td><b>Rp. <?php echo $total;?></b></td></tr>
<tr><th>No</th><th>Tanggal Transaksi</th><th>Operator</th><th>Total Transaksi</th></tr>

</thead>

</table>
</div>
</div>
</div>

