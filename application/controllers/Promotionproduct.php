<?php
class Promotionproduct extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $n = 8;
        $this->db->where('catalog','1');
        $this->db->where('number>','0');
        $sql = $this->db->get('tb_product');
        $numrow = $sql->num_rows();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('catalog','1');
        $this->db->where('number>','0');
        $this->db->limit($n);
        $query = $this->db->get('tb_product');
        $data['product'] = $query->result();
        $this->load->view('promotionproduct',$data);
    }
    public function page($page){
        $n = 7;
        $start = ($page-1)*$n;
        $this->db->where('catalog','1');
        $this->db->where('number>','0');
        $sql = $this->db->get('tb_product');
        $numrow = $sql->num_rows();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('catalog','1');
        $this->db->where('number>','0');
        $this->db->limit($n,$start);
        $query = $this->db->get('tb_product');
        $data['product'] = $query->result();
        $this->load->view('promotionproduct',$data);
    }
}
?>