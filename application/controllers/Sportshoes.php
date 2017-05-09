<?php
class Sportshoes extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $n = 8;
        $this->db->where('catalog','3');
        $this->db->where('number>','0');
        $sql = $this->db->get('tb_product');
        $numrow = $sql->num_rows();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('catalog','3');
        $this->db->where('number>','0');
        $this->db->limit($n);
        $query = $this->db->get('tb_product');
        $data['product'] = $query->result();
        $this->load->view('sportshoes',$data);
    }
    public function page($page){
        $n = 7;
        $start = ($page-1)*$n;
        $this->db->where('catalog','3');
        $this->db->where('number>','0');
        $sql = $this->db->get('tb_product');
        $numrow = $sql->num_rows();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('catalog','3');
        $this->db->where('number>','0');
        $this->db->limit($n,$start);
        $query = $this->db->get('tb_product');
        $data['product'] = $query->result();
        $this->load->view('sportshoes',$data);
    }
    public function buy($id){
        $this->load->library("cart");
        $login = $this->session->userdata('login');
        $count = $this->session->userdata('count');
        if($login == 'admin'){
            redirect('home');
            die();
        }
        $this->db->where('id=',$id);
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            $data = $query->result();
        }
        foreach ($data as $item){};
        $img = $item->img;
        $name = $item->name;
        $price =$item->price;
        $max = $item->number;
        $cart = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'qty' => 1,
            'img' => $img,
            'max' => $max
        );
        if($this->cart->insert($cart)){
            $count ++;
            $session_data = array(
                'count' => $count,
            );
            $this->session->set_userdata($session_data);
        }
        redirect('sportshoes');
    }
}
?>