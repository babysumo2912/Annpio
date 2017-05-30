<?php
class home_models extends CI_Model{
    public function getinfo($table,$key,$data){
        $this->db->where($key,$data);
        $query = $this->db->get($table);
        if($query ->num_rows() > 0){
            return $query->result();
        }else return false;
    }
}
?>