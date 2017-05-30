<?php
class admin_nhanvien extends CI_Controller{
    public function  index(){
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
                $nhanvien = $this->Admin_models->nhanvien();
                $count_mess = $this->Messenger_models->count();
                if($nhanvien){
                    $data['nhanvien'] = $nhanvien;
                }
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
    public function themnhanvien(){
        $login = $this->session->userdata('admin');
        $chucvu = $this->session->userdata('chucvu');
        if(isset($login)){
            if($chucvu == "admin"){
                $data['admin'] = $this->User_models->information($login);
                $count_hoadon = $this->Admin_models->hoadon_count();
                $nhanvien = $this->Admin_models->nhanvien();
                $count_mess = $this->Messenger_models->count();
                if($nhanvien){
                    $data['nhanvien'] = $nhanvien;
                }
                $data['count_hoadon'] = $count_hoadon;
                $data['count_mess'] = $count_mess;
                $name = $this->input->post('name');
                $account = $this->input->post('account');
                $ca = $this->input->post('ca');
                if(isset($name) && isset($account) && isset($ca)){

                    $add = array(
                        'account' => $account,
                        'name' => $name,
                        'password' => md5($account),
                        'ca'=>$ca,
                        'chucvu' => "Nhân viên"
                    );
                    $add_sql = $this->Admin_models->themnhanvien($add);
                    if($add_sql){
                        redirect('admin_nhanvien');
                    }else{
                        $err = "Tài khoản nhân viên này đã tồn tại!";
                        $this->session->set_flashdata('err',$err);
                        redirect('admin_nhanvien');
                    }
                }else echo 1;
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
    public function update_nhanvien($id){
        $login = $this->session->userdata('admin');
        $chucvu = $this->session->userdata('chucvu');
        if(isset($login)){
            if($chucvu == "admin"){
                $data['admin'] = $this->User_models->information($login);
                $count_hoadon = $this->Admin_models->hoadon_count();
                $nhanvien = $this->Admin_models->nhanvien();
                $count_mess = $this->Messenger_models->count();
                if($nhanvien){
                    $data['nhanvien'] = $nhanvien;
                }
                $data['count_hoadon'] = $count_hoadon;
                $data['count_mess'] = $count_mess;
                $ca = $this->input->post('suaca');
                if(isset($ca)){
                    $update = array(
                        'ca'=>$ca
                    );
                    $update_nhanvien = $this->Admin_models->update_nhanvien($id,$update);
                    if($update_nhanvien){
                        redirect('admin_nhanvien');
                    }
                }
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
    public function delete_nhanvien($id){
        $login = $this->session->userdata('admin');
        $chucvu = $this->session->userdata('chucvu');
        if(isset($login)){
            if($chucvu == "admin"){
                $data['admin'] = $this->User_models->information($login);
                $count_hoadon = $this->Admin_models->hoadon_count();
                $nhanvien = $this->Admin_models->nhanvien();
                $count_mess = $this->Messenger_models->count();
                if($nhanvien){
                    $data['nhanvien'] = $nhanvien;
                }
                $data['count_hoadon'] = $count_hoadon;
                $data['count_mess'] = $count_mess;
                $get_nhanvien = $this->Admin_models->delete_nhanvien($id);
                if($get_nhanvien){
                    redirect('admin_nhanvien');
                }
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