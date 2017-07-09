<?php
class Adminproduct extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('admin');
        if(isset($login)){
            $count_hoadon = $this->Admin_models->hoadon_count();
            $data['count_hoadon'] = $count_hoadon;
            $count_mess = $this->Messenger_models->count();
            $data['count_mess'] = $count_mess;
            $n = 10;
            $numrow = $this->Admin_models->product();
            $data['fullpage'] = ceil($numrow/$n);
            $this->db->limit($n);
            $this->db->order_by('number','ASC');
            // $this->db->group_by('name');
            $query = $this->db->get('tb_product');
            $data['product'] = $query->result();
            $this->load->view('admin/product',$data);
        }else{
            redirect('home');
        }
    }
    public function product($id){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('home');
        }
        $count_hoadon = $this->Admin_models->hoadon_count();
        $count_mess = $this->Messenger_models->count();
        $data['count_mess'] = $count_mess;
        $data['count_hoadon'] = $count_hoadon;
        $data['product'] = $this->Admin_models->get();
        $data['data_edit'] = $this->Admin_models->get_single($id);
        $size = $this->User_models->get_size($id);
            // var_dump($size); die();
            if($size){
                $data['size'] = $size;
            }
        $this->load->view('admin/product',$data);
    }
    public function edit(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $mota = $this->input->post('mota');
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
                'mota' => $mota,
            );
            $edit = $this->Admin_models->edit($name,$data);
            if($edit == true){
                redirect('adminproduct');
            }else{
                $data['err'] = "Updata Fail!";
                $this->load->view('admin/product',$data);
            }
//        }
    }
    public function page($page){
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $n = 10;
        $start = ($page-1)*$n;
        // $sql = $this->db->get('tb_product');
        $numrow = $this->Admin_models->product();
        $data['fullpage'] = ceil($numrow/$n);
        // $this->db->group_by('name');
        $this->db->order_by('number','ASC');
        $this->db->limit($n,$start);
        // $this->db->group_by('name');
        $query = $this->db->get('tb_product');
        $data['product'] = $query->result();
        $this->load->view('admin/product',$data);
    }
    public function delete($id){
        $product = $this->Admin_models->get_single($id);
        if($product){
            foreach ($product as $prd) {
                $delete = $this->Admin_models->delete_product($prd->name);        
            }
        }
        redirect('Adminproduct');
    }
}
?>