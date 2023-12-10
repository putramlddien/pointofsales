<title>Tambah Data Daftar Menu</title>
<h3>Tambah Daftar Menu</h3>
<?php
echo form_open('menu/post');
?>
<br>
<div class="module">
<div class="module-head">
<h3>Forms</h3>
</div>
<div class="module-body">
<table class="table table-border">
    <tr><td width="120">Nama Menu</td>
        <td><input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu">
       </td></tr>
    <tr><td>Kategori</td><td>
            <select name="kategori" class="form-control">
                <?php
                foreach ($kategori as $k)
                {
                    echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
                }
                ?>
            </select>
        </td></tr>
    <tr><td>Harga</td>
        <td><input type="text" class="form-control" name="harga" placeholder="harga">
       </td></tr>
    <tr><td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php echo anchor('menu','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>