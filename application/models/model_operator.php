<?php
class model_operator extends CI_Model{

  function login($username,$password)
    {
        $check=  $this->db->get_where('tb_operator',array
        ('username'=>$username,'password'=>$password));
        if($check->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
       
    function tampildata()
    {
        return $this->db->get('tb_operator');
    }
    
    function get_one($id)
    {
        $param  =   array('operator_id'=>$id);
        return $this->db->get_where('tb_operator',$param);
    }
}