<?php
class Test_models extends CI_model{
    public function add($data){
        $add = $this->db->insert('tb_test',$data);
        if(isset($add)){
            $query = $this->db->get('tb_test');
            if($query->num_rows() > 0){
                return $query->result();
            }
        }else return false;
    }
}
?>