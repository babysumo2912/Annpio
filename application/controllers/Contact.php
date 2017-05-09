<?php
class contact extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('login');
        $name = $this->session->userdata('name');
        if(isset($login)){
           $data['email'] = $login;
            $data['name'] = $name;
            $this->load->view('contact',$data);
        }else{$this->load->view('contact');}
    }
    public function send(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $content = $this->input->post('content');
        $data = array(
            'name' => $name,
            'email' => $email,
            'content' => $content,
        );
        $this->Messenger_models->send($data);
        $thongbao = "You sent 1 messenger";
        $data['thongbao'] = $thongbao;
        $this->load->view('contact',$data);
    }
}
?>