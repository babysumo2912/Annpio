<?php
class register extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $login = $this->session->userdata('login');
        if(isset($login)){
            redirect('home');
        }
        else{
            $this->load->view('register');
        }
    }
}
?>