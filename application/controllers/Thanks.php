<?php
class Thanks extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $mahoadon = $this->session->userdata('mahoadon');
        $data['view_single'] = $this->Hoa_don_models->view_single($mahoadon);
        $data['view_single_order'] = $this->Hoa_don_models->view_single_order($mahoadon);
        $this->load->view('thanks',$data);
    }
}
?>