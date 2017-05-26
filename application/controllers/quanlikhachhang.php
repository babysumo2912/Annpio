<?php
class quanlikhachhang extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('admin');
        $time = $this->session->userdata('time');
        if(isset($login)){
            if(time() - $time >= 3000000000){
                redirect('admin');
            }else{
                $data = array();
                $data['admin'] = $this->Admin_models->information($login);
                $count_hoadon = $this->Admin_models->hoadon_count();
                $count_mess = $this->Messenger_models->count();
                $data['count_mess'] = $count_mess;
                $data['count_hoadon'] = $count_hoadon;
                $query = $this->db->get('tb_user');
                $data['user'] = $query->result();
                $this->load->view('admin/taikhoankhachhang',$data);
            }
        }
    }
}

?>