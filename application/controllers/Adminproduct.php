<?php
class Adminproduct extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('login');
        if(isset($login) && $login == 'admin'){
            $count_hoadon = $this->Admin_models->hoadon_count();
            $data['count_hoadon'] = $count_hoadon;
            $count_mess = $this->Messenger_models->count();
            $data['count_mess'] = $count_mess;
            $n = 10;
            $numrow = $this->Admin_models->product();
            $data['fullpage'] = ceil($numrow/$n);
            $this->db->limit($n);
            $this->db->order_by('number','ASC');
            $query = $this->db->get('tb_product');
            $data['product'] = $query->result();
            $this->load->view('adminproduct',$data);
        }else{
            redirect('home');
        }
    }
    public function product($id){
        $login = $this->session->userdata('login');
        if(!isset($login) && $login!= "admnin"){
            redirect('home');
        }
        $data['product'] = $this->Admin_models->get();
        $data['data_edit'] = $this->Admin_models->get_single($id);
        $this->load->view('adminproduct',$data);
    }
    public function edit(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $img = $this->input->post('userfile');
        $price = $this->input->post('price');
        $number = $this->input->post('number');
        $catalog = $this->input->post('catalog');
//        if(isset($img)){
//            $config['upload_path'] = './public/img/product';
//            $config['allowed_types'] = 'png|jpg|jpeg|gif';
//            $this->load->library('upload',$config);
//            if($this->upload->do_upload()){
//                $data['upload'] = $this->upload->data();
//                $file_name = $data['upload']['filename'];
//                $data = array(
//                    'name' => $name,
//                    'img' => $file_name,
//                    'price' => $price,
//                    'number' => $number,
//                    'catalog' => $catalog
//                );
//                $edit = $this->Admin_models->edit($id,$data);
//                if($edit == true){
//                    redirect('adminproduct');
//                }else{
//                    $data['err'] = "Upload Fail!";
//                    $this->load->view('adminproduct',$data);
//                }
//            }
//        }else{
            $data= array(
                'name' => $name,
                'price' => $price,
                'number' => $number,
                'catalog' => $catalog
            );
            $edit = $this->Admin_models->edit($id,$data);
            if($edit == true){
                redirect('adminproduct');
            }else{
                $data['err'] = "Updata Fail!";
                $this->load->view('adminproduct',$data);
            }
//        }
    }
    public function page($page){
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $n = 10;
        $start = ($page-1)*$n;
        $sql = $this->db->get('tb_product');
        $numrow = $sql->num_rows();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->order_by('number','ASC');
        $this->db->limit($n,$start);
        $query = $this->db->get('tb_product');
        $data['product'] = $query->result();
        $this->load->view('adminproduct',$data);
    }
    public function delete($id){
        $this->Admin_models->delete_product($id);
        redirect('adminproduct');
    }
}
?>