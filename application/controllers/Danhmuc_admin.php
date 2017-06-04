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
                $catalog = $this->Admin_models->get_catalog();
                if($catalog){
                    $data['catalog'] = $catalog;
                }else $data['catalog'] = "";
                $data['count_hoadon'] = $count_hoadon;
                $data['count_mess'] = $count_mess;
                $this->load->view('admin/danhmuc',$data);
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
    public function add(){
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
                $catalog = $this->Admin_models->get_catalog();
                if($catalog){
                    $data['catalog'] = $catalog;
                }else $data['catalog'] = "";
                $data['count_hoadon'] = $count_hoadon;
                $data['count_mess'] = $count_mess;
                $madanhmuc = $this->input->post('madanhmuc');
                $tendanhmuc = $this->input->post('tendanhmuc');
                if(isset($madanhmuc) && isset($tendanhmuc)){
                    $data_add  =array(
                        'madanhmuc' => $madanhmuc,
                        'name' => $tendanhmuc,
                    );
                    $add_catalog = $this->Admin_models->add_catalog($data_add);
                    if($add_catalog == false){
                        $err = "Mã sản phẩm đã bị trùng!";
                        $this->session->set_flashdata('err',$err);
                        redirect('danhmuc_admin');
                    }else{
                        redirect('danhmuc_admin');
                    }
                }
                $this->load->view('admin/danhmuc',$data);
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
    public function view($madanhmuc){
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
                $catalog = $this->Admin_models->get_catalog();
                $view_catalog = $this->Admin_models->get_info_catalog($madanhmuc);
                if($view_catalog){
                    $data['view_catalog'] = $view_catalog;
                }else echo "Khong tin thay CSDL";
                if($catalog){
                    $data['catalog'] = $catalog;
                }else $data['catalog'] = "";
                $data['count_hoadon'] = $count_hoadon;
                $data['count_mess'] = $count_mess;
                $madanhmuc = $this->input->post('madanhmuc');
                $tendanhmuc = $this->input->post('tendanhmuc');
                if(isset($madanhmuc) && isset($tendanhmuc)){
                    $data_add  =array(
                        'madanhmuc' => $madanhmuc,
                        'name' => $tendanhmuc,
                    );
                    $add_catalog = $this->Admin_models->add_catalog($data_add);
                    if($add_catalog == false){
                        $err = "Mã sản phẩm đã bị trùng!";
                        $this->session->set_flashdata('err',$err);
                        redirect('danhmuc_admin');
                    }else{
                        redirect('danhmuc_admin');
                    }
                }
                $this->load->view('admin/danhmuc',$data);
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
    public function update($madanhmuc){
        $name = $this->input->post('tendanhmuc');
        $data_update = array(
            'name' => $name,
        );
        $update = $this->Admin_models->update_catalog($madanhmuc,$data_update);
        if($update){
            redirect('danhmuc_admin');
        }
    }
    public function xoa($madanhmuc){
        $delete = $this->Admin_models->xoa_danhmuc($madanhmuc);
        if($delete){
            redirect('danhmuc_admin');
        }
        else{
            $err = "Khong tim thay san pham";
            $this->session->set_flashdata('err',$err);
            redirect('danhmuc_admin');
        }
    }
}

?>