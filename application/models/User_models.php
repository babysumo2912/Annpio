<?php
class User_models extends CI_Model
{
    public function register($data)
    {
        $this->db->where('email', $data['email']);
        $check = $this->db->get('tb_user');
        if ($check->num_rows() > 0) {
            return false;
        } else {
            $register = $this->db->insert('tb_user', $data);
        }
        if (isset($register)) {
            return true;
        } else return false;
    }

    public function login($email, $pass)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $login = $this->db->get('tb_user'); // tuong tu nhu select * from tb_user
        if ($login->num_rows() > 0) {
            foreach ($login->result() as $row) {
                $data_login[] = $row;
            }
            return $data_login;
        } else {
            return false;
        }
    }

    public function information($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('tb_user');
        if ($query->num_rows() > 0) {
//            foreach($query->result() as $row){
//             $data[] = $row;
//            }
            return $query->result();
        }
    }
    //full code them hoa don to
    public function insert_order($data){
        $query = $this->db->insert('tb_hoadon',$data);
        if($query){
            $this->db->select_max('id');
            $id = $this->db->get('tb_hoadon');
            if($id->num_rows() > 0){
                return  $id->result();
            }
        }else return false;
    }
    //end
    //hoa don chiu tiet
    public function set_order($data){
        $query = $this->db->insert('tb_chitiet_hoadon',$data);
        if($query){
            return true;
        }else return false;
    }
    public function view_product($id_product){
        // return $id_product;die();
        $this->db->where('id',$id_product);
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            return $query->result();
            // $product = $query->result();
            // foreach($product as $prd){
            //     $name = $prd->name;
            // }
            // $this->db->where('name',$);
        }else return false;
    }
    public function get_size($id_product){
        // return $id_product;die();
        $this->db->where('id',$id_product);
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            $product = $query->result();
            foreach($product as $prd){
                $name = $prd->name;
            }
            $this->db->where('name',$name);
            $size = $this->db->get('tb_product');
            return $size->result();
        }else return false;
    }
}
?>