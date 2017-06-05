<!-- <?php
// class admin extends CI_Controller{
    // public function index(){
        // $login = $this->session->userdata('login');
        // if(isset($login) && $login == 'admin'){
            // $data['admin'] = $this->User_models->information($login);
            // $count_hoadon = $this->Admin_models->hoadon_count();
            // $count_mess = $this->Messenger_models->count();
            // $data['count_mess'] = $count_mess;
            // $data['count_hoadon'] = $count_hoadon;
            // $query = $this->db->get('tb_user');
            // $data['user'] = $query->result();
            // $this->load->view('admin',$data);
    //     }else{
    //         redirect('home');
    //     }
    // }
    // public function delete($id){
    //     $login = $this->session->userdata('login');
    //     if(!isset($login) || $login != "admin"){
    //         redirect('home');
    //         die();
    //     }
    //     $this->Admin_models->delete_user($id);
    //     redirect('admin');
    // }
// }
?> -->
 <?php
class admin extends CI_Controller{
    public function index(){
        $login = $this->session->userdata('admin');
        $time = $this->session->userdata('time');
        $err = $this->session->flashdata('err');
        if(isset($login)){
            if(time() - $time >= 3000000000){
                redirect('admin');
            }else{
                if(isset($err)){
                    $data['err'] = $err;
                }
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
                $chucvu = $row->chucvu;
            }
            $session_admin = array(
                'admin' => $id,
                'chucvu' =>$chucvu,
                'time' => time(),
            );
//            $this->session->set_userdata($admin);
            $this->session->set_userdata($session_admin);
                redirect('admin');
//            }else echo 1;
        }
    }
    public function delete($id){
        $login = $this->session->userdata('admin');
        if(!isset($login)){
            redirect('admin');
            die();
        }
        $this->Admin_models->delete_user($id);
        redirect('quanlikhachhang');
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
        $err = $this->session->flashdata('err_search');
        if(isset($err)){
            $data['err'] = $err;
        }
        $data['admin'] = $this->Admin_models->information($login);
        $count_hoadon = $this->Admin_models->hoadon_count();
        $count_mess = $this->Messenger_models->count();
        $data['count_mess'] = $count_mess;
        $data['count_hoadon'] = $count_hoadon;
        $catalog = $this->Admin_models->get_catalog();
        if($catalog){
            $data['catalog'] = $catalog;
        }
        $data_search = $this->session->flashdata('data_search');
        if(isset($data_search)){
            $data['data_search'] = $data_search;
        }
        $check = $this->session->flashdata('check');
        if(isset($check)){
            $data['check'] = $check;
        }
        $this->load->view('admin/nhapkho',$data);
    }
    public function searchsp(){
        $key =  $this->input->post('key');
        $search = $this->Admin_models->search_sp($key);
        if($search){
            $this->session->set_flashdata('data_search',$search);
            redirect('admin/nhapkho');
        }else{
            $err = "Không tìm thấy sản phẩm phù hợp";
            $this->session->set_flashdata('err_search',$err);
            redirect('admin/nhapkho');
        }
    }
    public function check_sp($id){
        $data = $this->Admin_models->get_single($id);
        if($data){
            $this->session->set_flashdata('check',$data);
            redirect('admin/nhapkho');
        }
    }
    public function nhapmoisanpham(){
        $img = $this->input->post('userfile');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $number = $this->input->post('number');
        $catalog = $this->input->post('catalog');
        if(!isset($name) && !isset($price) && !isset($number) && !isset($img) && !isset($catalog)){
            redirect('adminproduct');
        }
        $config['upload_path'] = './public/img/product/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $this->load->library('upload',$config);
        if($this->upload->do_upload()) {
            $data['upload'] = $this->upload->data();
            $file_name = $data['upload']['file_name'];
            $upload = array(
                'img' => $file_name,
                'name' => $name,
                'price' => $price,
                'number' => $number,
                'catalog' => $catalog
            );
            $data['addnew'] = $this->Admin_models->addproduct($upload);
        }else{
            $data['error'] = $this->upload->display_errors();

            $this->load->view('admin/addproduct', $data);
        }
        if(isset($data['addnew']) && $data['addnew'] == false){
            $error = 'Product name already exists !';
            $data['error'] = $error;
            $this->load->view('admin/addproduct',$data);
        }
        if(isset($data['addnew']) && $data['addnew'] == true){
            $data['product'] = $this->Admin_models->product();
            redirect('adminproduct',$data);
        }
    }
    public function add_nhapkho(){

    }
}
?>