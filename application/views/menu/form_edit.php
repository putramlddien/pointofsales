<title>Edit Daftar Menu</title>
<h3>Edit Daftar Menu</h3>
<?php
echo form_open('menu/edit');
?>
<br>
<div class="module">
<div class="module-head">
<h3>Forms</h3>
</div>
<div class="module-body">
<table class="table table-border">
<input type="hidden" name="id" value="<?php echo $record['menu_id']?>">
    <tr><td width="120">Nama Menu</td>
        <td><input type="text" class="form-control"  name="nama_menu" value="<?php echo $record['nama_menu']?>" placeholder="nama barang">
       </td></tr>
    <tr><td>Kategori</td><td>
            <select name="kategori" class="form-control" >
                <?php
                foreach ($kategori as $k)
                {
                    echo "<option value='$k->kategori_id'";
                    echo $record['kategori_id']==$k->kategori_id?'selected':'';
                    echo">$k->nama_kategori</option>";
                }
                ?>
            </select>
        </td></tr>
    <tr><td>Harga</td>
        <td><input type="text" class="form-control"  name="harga" value="<?php echo $record['harga']?>" placeholder="harga">
       </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php echo anchor('menu','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>