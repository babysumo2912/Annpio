<?php
class Message extends CI_Controller {
    public function index(){
        $count_mess = $this->Messenger_models->count();
        $login = $this->session->userdata('login');
        if(isset($login) && $login != "admin"){
            redirect('home');
        }
        $count_hoadon = $this->Admin_models->hoadon_count();
        $admin = $this->User_models->information($login);
        $data['count_mess'] = $count_mess;
        $data['count_hoadon'] = $count_hoadon;
        $data['admin'] = $admin;
        $data['messenger'] =$this->Messenger_models->getlist();
        $this->load->view('message',$data);
    }
    public function view_chitiet($id){
        $query = $this->Messenger_models->getinfo($id);
        if(isset($query)){
            $data['view_mess'] = $query;
            $read = array(
                'active' => 1,
            );
            $this->Messenger_models->read($read);
        }else {
            $data['err'] = "Fail!";
        }
        $data['messenger'] =$this->Messenger_models->getlist();
        $this->load->view('message',$data);
    }
}
?>