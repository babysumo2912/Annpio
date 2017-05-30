<?php
class danhmuc_admin extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('admin');
        $chucvu = $this->session->userdata('chucvu');
        if(isset($login)){
            if($chucvu == "admin"){
                $err = $this->session->flashdata('err');
                if(isset($err)){
                    $data['err'] = $err;
                }
                $data['admin'] = $this->User_models->information($login);
                $count_hoadon = $this->Admin_models->hoadon_count();
                $count_mess = $this->Messenger_models->count();
                $data['count_hoadon'] = $count_hoadon;
                $data['count_mess'] = $count_mess;
                $this->load->view('admin/nhanvien',$data);
            }else{
                $err = "Chỉ có chủ cửa hàng mới thực hiện được chức năng này! ";
                $this->session->set_flashdata('err',$err);
                redirect('admin');
            }
        }else
        {
            redirect('admin');
        }
    }
}

?>