<?php
class kategori extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_kategori');
        chek_session();
    }
    
    function index(){
        $data['record'] = $this->model_kategori->tampilkan_data();
        $this->template->load('template','kategori/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            $this->model_kategori->post();
            redirect('kategori');
        }
        else{
            $this->template->load('template','kategori/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            $this->model_kategori->edit();
            redirect('kategori');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_kategori->get_one($id)->row_array();
            $this->template->load('template','kategori/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_kategori->delete($id);
        redirect('kategori');
    }
}