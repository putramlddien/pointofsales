<?php
class model_menu extends ci_model{
    
    function tampil_data()
    {
        $query= "SELECT b.menu_id,b.nama_menu,b.harga,kb.nama_kategori
                FROM tb_menu as b,tb_kategori as kb
                WHERE b.kategori_id=kb.kategori_id";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('tb_menu',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('menu_id'=>$id);
        return $this->db->get_where('tb_menu',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('menu_id',$id);
        $this->db->update('tb_menu',$data);
    }
    
    function delete($id)
    {
        $this->db->where('menu_id',$id);
        $this->db->delete('tb_menu');
    }
}