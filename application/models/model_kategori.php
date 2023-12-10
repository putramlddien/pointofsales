<?php
class Model_kategori extends CI_Model{
    
    function tampilkan_data(){
        
        return $this->db->get('tb_kategori');
    }
    
    function post(){
        $data=array(
           'nama_kategori'=>  $this->input->post('kategori')
                    );
        $this->db->insert('tb_kategori',$data);
    }
        
    function edit()
    {
        $data=array(
           'nama_kategori'=>  $this->input->post('kategori'));
        $this->db->where('kategori_id',$this->input->post('id'));
        $this->db->update('tb_kategori',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('kategori_id'=>$id);
        return $this->db->get_where('tb_kategori',$param);
    }
    
    function delete($id)
    {
        $this->db->where('kategori_id',$id);
        $this->db->delete('tb_kategori');
    }
}