<?php
class Menu extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_menu');
        chek_session();
    }


    function index()
    {
        $data['record']     =    $this->model_menu->tampil_data();
        $this->template->load('template','menu/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            $nama       =   $this->input->post('nama_menu');
            $kategori   =   $this->input->post('kategori');
            $harga      =   $this->input->post('harga');
            $data       = array('nama_menu'=>$nama,
                                'kategori_id'=>$kategori,
                                'harga'=>$harga);
            $this->model_menu->post($data);
            redirect('menu');
        }
        else{
            $this->load->model('model_kategori');
            $data['kategori']=  $this->model_kategori->tampilkan_data()->result();
            $this->template->load('template','menu/form_input',$data);
        }
    }
    
    function edit()
    {
       if(isset($_POST['submit'])){
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama_menu');
            $kategori   =   $this->input->post('kategori');
            $harga      =   $this->input->post('harga');
            $data       = array('nama_menu'=>$nama,
                                'kategori_id'=>$kategori,
                                'harga'=>$harga);
            $this->model_menu->edit($data,$id);
            redirect('menu');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_kategori');
            $data['kategori']   =  $this->model_kategori->tampilkan_data()->result();
            $data['record']     =  $this->model_menu->get_one($id)->row_array();
            $this->template->load('template','menu/form_edit',$data);
        }
    }
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_menu->delete($id);
        redirect('menu');
    }
}