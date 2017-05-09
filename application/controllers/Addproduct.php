<?php
class addproduct extends CI_Controller {
    public function index(){
        $login = $this->session->userdata('login');
        if(isset($login) && $login == 'admin'){
            $data['admin'] = $this->User_models->information($login);
            $count_hoadon = $this->Admin_models->hoadon_count();
            $count_mess = $this->Messenger_models->count();
            $data['count_hoadon'] = $count_hoadon;
            $data['count_mess'] = $count_mess;
            $this->load->view('addproduct',$data);
        }else
        {
            redirect('home');
        }
    }
    public function addnew(){
        $img = $this->input->post('userfile');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $number = $this->input->post('number');
        $catalog = $this->input->post('catalog');
        if(!isset($name) && !isset($price) && !isset($number) && !isset($img) && !isset($catalog)){
            redirect('adminproduct');
        }
        $config['upload_path'] = './public/img/product/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $this->load->library('upload',$config);
        if($this->upload->do_upload()) {
            $data['upload'] = $this->upload->data();
            $file_name = $data['upload']['file_name'];
            $upload = array(
                'img' => $file_name,
                'name' => $name,
                'price' => $price,
                'number' => $number,
                'catalog' => $catalog
            );
            $data['addnew'] = $this->Admin_models->addproduct($upload);
        }else{
            $data['error'] = $this->upload->display_errors();

            $this->load->view('addproduct', $data);
        }
        if(isset($data['addnew']) && $data['addnew'] == false){
            $error = 'Product name already exists !';
            $data['error'] = $error;
            $this->load->view('addproduct',$data);
        }
        if(isset($data['addnew']) && $data['addnew'] == true){
            $data['product'] = $this->Admin_models->product();
            redirect('adminproduct',$data);
        }
    }
}
?>