<title>Form Transaksi</title>
<h3>Form Transaksi</h3>
<?php
echo form_open('transaksi');
?>
<div class="module-body table">
    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
        <tr class="success"><th>Form</th></tr>
    <tr><td>
            
            <div class="control-group">
                <input list="menu" style="width: 31%; height: 25px;" class="" name="menu" placeholder="  Masukan Nama Menu">
                <input type="text" name="qty" style="width: 30%; height: 21px; margin-top: 1%; margin-left: 2%;" placeholder=" Jumlah">
            </div>
</td></tr>
    <tr><td>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <?php echo anchor('transaksi/selesai_belanja','Selesai',array('class'=>'btn btn-primary'))?>
        </td></tr>
</table>
</form>
</div>
</div>
<div class="module-body table">
    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
    <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
    <tr><th>No</th><th>Nama Menu</th><th>Harga</th><th>Jumlah</th><th>Subtotal</th><th>Cancel</th></tr>
    <?php
    $no=1;
    $total=0;
    foreach ($detail as $r)
    {
        echo "<tr>
            <td>$no</td>
            <td>$r->nama_menu</td>
            <td>$r->harga</td>
            <td>$r->qty</td>
            <td>".$r->qty*$r->harga."</td>
            <td>".anchor('transaksi/hapusitem/'.$r->t_detail_id,'Hapus')."</td></tr>";
        $total=$total+($r->qty*$r->harga);
        $no++;
    }
    ?>
    <tr><td colspan="5"><p align="right">Total</p></td><td><?php echo $total;?></td></tr>
</table>

<datalist id="menu">
    <?php
    foreach ($menu->result() as $b)
    {
        echo "<option value='$b->nama_menu'>";
    }
    ?>
    
</datalist>
</div>
</div>
</div>
</div>