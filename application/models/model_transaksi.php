<?php
class model_transaksi extends ci_model{
    
    function simpan_menu()
    {
        $nama_menu    =  $this->input->post('menu');
        $qty            =  $this->input->post('qty');
        $idmenu       = $this->db->get_where('tb_menu',array('nama_menu'=>$nama_menu))->row_array();
        $data           = array('menu_id'=>$idmenu['menu_id'],
                                'qty'=>$qty,
                                'harga'=>$idmenu['harga'],
                                'status'=>'0');
        $this->db->insert('transaksi_detail',$data);
    }
    
    function tampilkan_detail_transaksi()
    {
        $query  ="SELECT td.t_detail_id,td.qty,td.harga,b.nama_menu
                FROM transaksi_detail as td,tb_menu as b
                WHERE b.menu_id=td.menu_id and td.status='0'";
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('t_detail_id',$id);
        $this->db->delete('transaksi_detail');
    }
    
    function selesai_belanja($data)
    {
        $this->db->insert('transaksi',$data);
        $last_id=  $this->db->query("select transaksi_id from transaksi order by transaksi_id desc")->row_array();
        $this->db->query("update transaksi_detail set transaksi_id='".$last_id['transaksi_id']."' where status='0'");
        $this->db->query("update transaksi_detail set status='1' where status='0'");
    }
    
    function laporan_default()
    {
        $query="SELECT t.tanggal_transaksi,o.nama_lengkap,sum(td.harga*td.qty) as total
                FROM transaksi as t,transaksi_detail as td,tb_operator as o
                WHERE td.transaksi_id=t.transaksi_id and o.operator_id=t.operator_id
                group by t.transaksi_id";
        return $this->db->query($query);
    } 
}