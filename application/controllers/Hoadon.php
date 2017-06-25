<?php
class hoadon extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('home'); die();
        }
        $oder = $this->Hoa_don_models->admin_view();
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $count_mess = $this->Messenger_models->count();
        $data['count_mess'] = $count_mess;
        $err = $this->session->flashdata('err');
        if(isset($err)){
            $data['err'] = $err;
        }
        if($oder != false){
            $n = 10;
            $this->db->where('active','0');
            $this->db->order_by('id','DESC');
            $sql = $this->db->get('tb_hoadon');
            $numrow = $sql->num_rows();
            $data['fullpage'] = ceil($numrow/$n);
            $this->db->where('active','0');
            $this->db->order_by('id','DESC');
            $this->db->limit($n);
            $query = $this->db->get('tb_hoadon');
            $data['oder'] = $query->result();
            $this->load->view('admin/hoadon',$data);
        }else{
            $this->load->view('admin/hoadon',$data);
        }
    }
    public function page($page){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('home'); die();
        }
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $n = 10;
        $start = ($page-1)*$n;
        $this->db->where('active','0');
        $sql = $this->db->get('tb_hoadon');
        $numrow = $sql->num_rows();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('active','0');
        $this->db->limit($n,$start);
        $query = $this->db->get('tb_hoadon');
        $data['oder'] = $query->result();
        $this->load->view('admin/hoadon',$data);
    }
    public function view_chitiet($id){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('home'); die();
        }
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $data['view_single'] = $this->Hoa_don_models->view_single($id);
        $data['view_single_order'] = $this->Hoa_don_models->view_single_order($id);
        $this->load->view('admin/hoadon',$data);
    }
    public function giaohang($id){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('home'); die();
        }
        $data = array(
            'active' => 1,
        );
        $giaohang = $this->Hoa_don_models->edit($id,$data);
        if($giaohang == true){
            redirect('hoadon');
        }
    }
    public function delete($id){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('home'); die();
        }
        if($login != '1'){
            $err = "Chỉ có chủ cửa hàng mới thực hiện được chức năng này";
            $this->session->set_flashdata('err',$err);
            redirect('hoadon');
        }
        $product = $this->Admin_models->get();
        $product_hd = $this->Hoa_don_models->view_single_order($id);
        $test = true;
        if($product_hd && $product){
            foreach ($product_hd as $prd_hd) {
                foreach ($product as $prd) {
                    // echo $prd_hd->id_product;die();0
                    if($prd->id == $prd_hd->id_product){
                        $test = false;
                        $soluong = $prd->number+$prd_hd->qty;
                        $data_up = array(
                            'number' => $soluong,
                            );
                        $up = $this->Admin_models->edit($prd->id,$data_up);
                    }
                }
                if($test == true){
                    $data_add = array(
                        'id' => $prd_hd->id_product,
                        'img' => $prd_hd->img,
                        'name' => $prd_hd->name,
                        'price' => $prd_hd->name,
                        'number' => $prd_hd->qty,
                        'madanhmuc' => $prd_hd->madanhmuc,
                        'size' => $prd_hd->size,
                        );
                    $add = $this->Admin_models->addproduct($data_add);
                }
            }
        }
        $this->Hoa_don_models->delete($id);
        redirect('hoadon');
    }
}

?>