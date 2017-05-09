<?php
class user extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('login');
        if(isset($login)){
            if($login == "admin"){
                redirect('admin');
            }else{
                $order = $this->Hoa_don_models->user_order($login);
                if($order == true){
                    $data['order'] = $order;
                }else{
                    $data['order'] = 0;
                }
                $data['user'] = $this->User_models->information($login);
                $this->load->view('user',$data);
            }
        }else{
            redirect('home');
        }
    }
    public function view($id){
        $login = $this->session->userdata('login');
        if(!isset($login)){
            redirect('home');
        }
        $data['view_single'] = $this->Hoa_don_models->view_single($id);
        foreach ($data['view_single'] as $item){
            if($item->email != $login){
                redirect('user');
            }else{
                $data['view_single_order'] = $this->Hoa_don_models->view_single_order($id);
            }
        }
        $data['user'] = $this->User_models->information($login);
        $this->load->view('user',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
?>