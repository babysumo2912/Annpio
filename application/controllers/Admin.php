 <?php
class admin extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('admin');
        $time = $this->session->userdata('time');
        if(isset($login)){
            if(time() - $time >= 3000000000){
                redirect('admin');
            }else{
                $data['admin'] = $this->Admin_models->information($login);
                $count_hoadon = $this->Admin_models->hoadon_count();
                $count_mess = $this->Messenger_models->count();
                $data['count_mess'] = $count_mess;
                $data['count_hoadon'] = $count_hoadon;
                $query = $this->db->get('tb_user');
                $data['user'] = $query->result();
                $this->load->view('admin/admin',$data);
            }
        }else{
            $this->load->view('admin/adminlogin');
        }
    }
    public function login(){
        $login = $this->session->userdata('admin');
        if(isset($login)){
            redirect('admin');
            die();
        }
        $name = $this->input->post('account');
        $password = md5($this->input->post('password'));
        $login['admin'] = $this->Admin_models->login($name,$password);
        if($login['admin'] == false){
            $data['err'] = "Login Failed! Please try again.";
            $this->load->view('admin/adminlogin',$data);
        }else{
            foreach ($login['admin'] as $row) {
                $id = $row->id;
            }
            $session_admin = array(
                'admin' => $id,
                'time' => time(),
            );
            $this->session->set_userdata($session_admin);
            redirect('admin');
        }
    }
    public function delete($id){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('home');
            die();
        }
        $this->Admin_models->delete_user($id);
        redirect('admin');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }
    public function nhapkho(){
        $login = $this->session->userdata('admin');
        if(!isset($login)) {
            redirect('admin');
            die();
        }
        $data['admin'] = $this->Admin_models->information($login);
        $this->load->view('admin/nhapkho',$data);
    }
}
?>