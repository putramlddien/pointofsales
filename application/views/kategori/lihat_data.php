<title>Kategori Menu</title>
<h3>Kategori Menu</h3>
<?php
echo anchor('kategori/post','Tambah Data',array('class'=>'btn btn-primary btn-sm'))
?>
<br>
<br>
<br>
<div class="module">
<div class="module-head">
<h3>Table Data Kategori Menu</h3>
</div>
<div class="module-body table">
<table cellpadding="0" cellspacing="0" border="0" id="table1" 
class="datatable-1 table table-bordered table-striped  display" width="100%">
<thead>
<tr><th>No</th><th>Kategori Menu</th><th colspan="2">Action</th></tr>
</thead>
<tbody>
    <?php
    $no=1;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td>$r->nama_kategori</td>
            <td width='10'><a href='kategori/edit/$r->kategori_id' class='btn btn btn-sm'>Edit</a></td>
            <td width='10'><a href='kategori/delete/$r->kategori_id' class='btn btn btn-sm'>Delete</a></td>
            </tr>";
        $no++;
    }
    ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
