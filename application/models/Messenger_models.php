<?php
class Messenger_models extends CI_Model {
    public function send($data){
        $this->db->insert('tb_message',$data);
        return true;
    }
    public function getlist(){
        $this->db->order_by('id','desc');
        $this->db->where('active',0);
        $query = $this->db->get('tb_message');
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    public function read($data){
        $this->db->update('tb_message',$data);
    }
    public function getinfo($id){
        $login = $this->session->userdata('login');
        if($login != "admin"){
            redirect('home');
        }
        $this->db->where('id',$id);
        $query = $this->db->get('tb_message');
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    public function count(){
        $this->db->where('active',0);
        $query = $this->db->get('tb_message');
        return  $query->num_rows();
    }
}
?>