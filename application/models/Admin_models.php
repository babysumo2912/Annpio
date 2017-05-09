<?php
class admin_models extends CI_model{
    public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_user');
    }
    public function addproduct($data){
        $this->db->where('name',$data['name']);
        $check = $this->db->get('tb_product');
        if($check->num_rows() > 0){
            return false;
        }else{
            $addproduct = $this->db->insert('tb_product',$data);
        }
        if(isset($addproduct)){
            return true;
//            $query = $this->db->get('tb_product');
//            if($query->num_rows() > 0){
//                return $query->result();
//            }
        }
    }
    public function login($name,$password){
    $this->db->where('account',$name);
    $this->db->where('password',$password);
    $login = $this->db->get('tb_admin');
    if($login->num_rows() > 0){
        return $login->result();
    }else return false;
    }
    public function information ($id){
        $this->db->where('id',$id);
        $infomation = $this->db->get('tb_admin');
        if($infomation -> num_rows() > 0){
            return $infomation->result();
        }else return false;
    }
    public function delete_product($id){
        $this->db->where('id',$id);
        $query = $this->db->get('tb_product');
        if(isset($query)){
            foreach ($query->result() as $item){}
            unlink('public/img/product/'.$item->img);
            $this->db->where('id',$id);
            $this->db->delete('tb_product');
        }


    }
    public function get(){
        $query = $this->db->get('tb_product');
        return $query->result();
    }
    public function product(){
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            return $query->num_rows();
        }
    }
    public function get_single($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    public function edit($id,$data){
        $this->db->where('id',$id);
        $query = $this->db->update('tb_product',$data);
        if(isset($query)){
            return true;
        }else return false;
    }
    public function hoadon_count(){
        $this->db->where('active=',0);
        $query = $this->db->get("tb_hoadon");
        if($query->num_rows() > 0){
            return $query->num_rows();
        }else return 0;
    }
}
?>