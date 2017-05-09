<?php
class Old_oder extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $login = $this->session->userdata('login');
        if($login != "admin"){
            redirect('home'); die();
        }
        $oder = $this->Hoa_don_models->admin_view1();
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $count_mess = $this->Messenger_models->count();
        $data['count_mess'] = $count_mess;
        if($oder != false){
            $n = 10;
            $this->db->where('active','1');
            $sql = $this->db->get('tb_hoadon');
            $numrow = $sql->num_rows();
            $data['fullpage'] = ceil($numrow/$n);
            $this->db->where('active','1');
            $this->db->limit($n);
            $query = $this->db->get('tb_hoadon');
            $data['oder'] = $query->result();
            $this->load->view('old_oder',$data);
        }else{
            $this->load->view('old_oder',$data);
        }
    }
    public function page($page){
        $login = $this->session->userdata('login');
        if($login != "admin"){
            redirect('home'); die();
        }
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $n = 10;
        $start = ($page-1)*$n;
        $this->db->where('active','1');
        $this->db->order_by('id','DESC');
        $sql = $this->db->get('tb_hoadon');
        $numrow = $sql->num_rows();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('active','1');
        $this->db->order_by('id','DESC');
        $this->db->limit($n,$start);
        $query = $this->db->get('tb_hoadon');
        $data['oder'] = $query->result();
        $this->load->view('old_oder',$data);
    }
    public function view_chitiet($id){
        $login = $this->session->userdata('login');
        if($login != "admin"){
            redirect('home'); die();
        }
        $count_hoadon = $this->Admin_models->hoadon_count();
        $data['count_hoadon'] = $count_hoadon;
        $data['view_single'] = $this->Hoa_don_models->view_single($id);
        $data['view_single_order'] = $this->Hoa_don_models->view_single_order($id);
        $this->load->view('old_oder',$data);
    }
    public function delete($id){
        $login = $this->session->userdata('login');
        if($login != "admin"){
            redirect('home'); die();
        }
        $this->Hoa_don_models->delete($id);
        redirect('old_oder');
    }
}

?>