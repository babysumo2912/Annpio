<?php
class Hoa_don_models extends CI_Model {
    public function view_single($mahoadon){
        $this->db->where('id',$mahoadon);
        $query = $this->db->get('tb_hoadon');
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    public function view_single_order($mahoadon){
        $this->db->where('mahoadon',$mahoadon);
        $query = $this->db->get('tb_chitiet_hoadon');
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    public function admin_view(){
        $this->db->where('active=',0);
        $query = $this->db->get('tb_hoadon');
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
    }
    public function admin_view1(){
        $this->db->where('active=',1);
        $query = $this->db->get('tb_hoadon');
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
    }
    public function edit($id,$data){
        $this->db->where('id',$id);
        $query = $this->db->update('tb_hoadon',$data);
        if(isset($query)){
            return true;
        }else return false;
    }
    public function user_order($email){
        $this->db->where('email',$email);
        $this->db->order_by('id','desc');
        $query = $this->db->get('tb_hoadon');
        if($query->num_rows() > 0){
            return $query->result();
        }else return false;
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_hoadon');
        $this->db->where('mahoadon',$id);
        $query = $this->db->get('tb_chitiet_hoadon');
        foreach ($query->result() as $item){
            if($item->mahoadon == $id){
                $this->db->where('mahoadon',$id);
                $this->db->delete('tb_chitiet_hoadon');
            }
        }
        return true;
    }
    public function get_date($day_begin,$day_end){
        $this->db->where('date>=',$day_begin);
        $this->db->where('date<=',$day_end);
        $get = $this->db->get('tb_hoadon');
        if($get->num_rows() > 0){
            return $get->result();
        }else return false;
    }
    public function get_date_off($day_begin,$day_end){
        $this->db->where('ngaythang>=',$day_begin);
        $this->db->where('ngaythang<=',$day_end);
        $this->db->where('trangthai','Don offline');
        $get = $this->db->get('tb_xuatkho');
        if($get->num_rows() > 0){
            return $get->result();
        }else return false;
    }
}
?>