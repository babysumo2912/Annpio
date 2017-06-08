<?php
class admin_models extends CI_model{
    public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_user');
    }
    public function addproduct($data){
//        $this->db->where('name',$data['name']);
//        $check = $this->db->get('tb_product');
//        if($check->num_rows() > 0){
//            return false;
//        }else{
//            $addproduct = $this->db->insert('tb_product',$data);
//        }
//
        $addproduct = $this->db->insert('tb_product',$data);
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
        }else return false;
    }
    public function data_product(){
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
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
    public function nhanvien(){
        $this->db->where('chucvu!=','admin');
        $query = $this->db->get("tb_admin");
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
    }
    public function themnhanvien($data){
        $this->db->where('account',$data['account']);
        $check = $this->db->get('tb_admin');
        if($check->num_rows()>0){
            return false;
        }else{
            $query = $this->db->insert('tb_admin',$data);
            if(isset($query)){
                return true;
            }else return false;
        }
    }
    public function update_nhanvien($id,$data){
        $this->db->where('id',$id);
        $query = $this->db->update('tb_admin',$data);
        if(isset($query)){
            return true;
        }else{
            return false;
        }
    }
    public function delete_nhanvien($id){
        $this->db->where('id',$id);
        $query = $this->db->delete('tb_admin');
        if(isset($query)){
            return true;
        }else return false;
    }
    function add_catalog($data){
        $this->db->where('madanhmuc',$data['madanhmuc']);
        $check = $this->db->get('tb_catalog');
        if($check->num_rows() > 0){
            return false;
        }else{
            $query = $this->db->insert('tb_catalog',$data);
            if(isset($query)){
                return true;
            }
        }
    }
    function get_catalog(){
        $query = $this->db->get('tb_catalog');
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
    }
    function get_info_catalog($madanhmuc){
        $this->db->where('madanhmuc',$madanhmuc);
        $query = $this->db->get('tb_catalog');
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
    }
    function update_catalog($madanhmuc,$data){
        $this->db->where('madanhmuc',$madanhmuc);
        $update = $this->db->update('tb_catalog',$data);
        if($update){
            return true;
        }else return false;
    }
    function xoa_danhmuc($madanhmuc){
        $this->db->where('madanhmuc',$madanhmuc);
        $delete = $this->db->delete('tb_catalog');
        if($delete){
            return true;
        }else return false;
    }
    function search_sp($key){
        $this->db->like('name',$key);
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
    }
    public function luukho($data){
        $query = $this->db->insert('tb_nhapkho',$data);
        if($query){
            $this->db->select_max('id_nhapkho');
            $id_nhapkho = $this->db->get('tb_nhapkho');
            return $id_nhapkho->result();
        }
    }
}
?>