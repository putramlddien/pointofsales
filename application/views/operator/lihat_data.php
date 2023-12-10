<title>Operator</title>
<h3>Data Operator</h3>
<?php
echo anchor('operator/post','Tambah Data',array('class'=>'btn btn-primary btn-sm'))
?>
<br>
<br>
<br>
<div class="module">
<div class="module-head">
<h3>Table Data Operator</h3>
</div>
<div class="module-body table">
<table cellpadding="0" cellspacing="0" border="0" id="table1" class="datatable-1 table table-bordered table-striped  display" width="100%">
<thead>
<tr><th colspan="6">Operator</th></tr>
<tr><th>No</th><th>Nama Lengkap</th><th>Username</th><th>Terakhir Login</th><th colspan="2">Action</th></tr>
</thead>
<tbody>
    <?php
    $no=1;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td>$r->nama_lengkap</td>
            <td>$r->username</td>
            <td>$r->last_login</td>
            <td  width='20'><a href='operator/edit/$r->operator_id' class='btn btn btn-sm'>Edit</a></td>
            <td  width='20'><a href='operator/delete/$r->operator_id' class='btn btn btn-sm'>Delete</a></td>
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