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
        $err_search = $this->session->flashdata('err_search');
        if(isset($err)){
            $data['err'] = $err_search;
        }
        $err = $this->session->flashdata('err');
        if(isset($err)){
            $data['err_add'] = $err;
        }
        $err = $this->session->flashdata('err_luu');
        if(isset($err)){
            $data['err_luu'] = $err;
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
        $cart = $this->cart->contents();
        if($cart){
            $data['cart'] = $cart;
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
        $masanpham = $this->input->post('masanpham');
        $tensanpham = $this->input->post('tensanpham');
        $gianhap = $this->input->post('gianhap');
        $giaban = $this->input->post('giaban');
        $soluong = $this->input->post('soluong');
        $danhmuc = $this->input->post('danhmuc');
        $size = $this->input->post('size');
        if(!isset($tensanpham) && !isset($giaban) && !isset($gianhap) && !isset($soluong) && !isset($danhmuc) && !isset($size)){
            redirect('admin/nhapkho');
        }
        if($size == "0"){
            $err = "Vui lòng chọn size";
            $this->session->set_flashdata('err',$err);
            redirect('admin/nhapkho');
        }
        if($danhmuc == "0"){
            $err = "Vui lòng chọn danh mục";
            $this->session->set_flashdata('err',$err);
            redirect('admin/nhapkho');
        }
        if(isset($masanpham)){
//            if(isset($soluong) && isset($gianhap) && isset($giaban)){
                $array_masp = explode(' ',$masanpham);
                $data_product = $this->Admin_models->get_single($array_masp['1']);
                if($data_product){
                    foreach($data_product as $dtp){};
                    $id = $dtp->id;
                    $tensanpham = $dtp->name;
                    $size = $dtp->size;
                    $danhmuc = $dtp->madanhuc;
                    $img = $dtp->img;
                }else{
                    echo "Loi tim san pham"; die();
                }
//            }else{
//                echo "Loi linh tinh"; die();
//            }
        }else{
            $i = $this->session->userdata('i');
            $config['upload_path'] = './public/img/product/';
            $config['allowed_types'] = 'gif|png|jpg|jpeg';
            $this->load->library('upload',$config);
            if($this->upload->do_upload()) {
                $data['upload'] = $this->upload->data();
                $img = $data['upload']['file_name'];
                if(isset($i)){
                    $id=$i;
                }else{
                    $id = -1;
                    $i = -1;
                }
            }else{
                $error = $this->upload->display_errors();

                echo $error;
                die();
            }
        }
        $cart = array(
            'id' => $id,
            'name' => $tensanpham,
            'price' => $gianhap,
            'price_ban' => $giaban,
            'danhmuc' => $danhmuc,
            'img' => $img,
            'size' => $size,
            'qty'=>$soluong,
        );
        if($this->cart->insert($cart)){
            $i--;
            $this->session->set_userdata('i',$i);
            redirect('admin/nhapkho');
        }else echo "Loi khong nhap duoc";
    }
    public function capnhap_pnk(){
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'amount' => $amount,
                'qty' => $qty
            );
            $this->cart->update($data);
        }
        redirect('admin/nhapkho');
    }
    public function luupnk(){
        $cart = $this->cart->contents();
        $data_product = $this->Admin_models->product();

        if(count($cart) > 0){
            foreach($cart as $row){
                if($data_product == false){
                    $data_add = array(
                        'img' => $row['img'],
                        'name' => $row['name'],
                        'price' => $row['price_ban'],
                        'price_nhap' => $row['price'],
                        'number' => $row['qty'],
                        'number_kho' => $row['qty'],
                        'madanhmuc' => $row['danhmuc'],
                        'size'=>$row['size'],
                    );
                    $this->Admin_models->addproduct($data_add);}
                foreach ($data_product as $item){
                    if($row['id'] == $$item->id){
                        echo "Trungf";
                    }else{
                        $data_add = array(
                            'img' => $row['img'],
                            'name' => $row['name'],
                            'price' => $row['price_ban'],
                            'price_nhap' => $row['price'],
                            'number' => $row['qty'],
                            'number_kho' => $row['qty'],
                            'madanhmuc' => $row['danhmuc'],
                            'size'=>$row['size'],
                        );
                        $this->Admin_models->addproduct($data_add);
                    }
               }
            }
            $this->cart->destroy();
            redirect('admin/nhapkho');
        }else{
            $err = "Hiện tại bạn chưa có sản phẩm để lưu kho!";
            $this->session->set_flashdata('err_luu',$err);
            redirect('admin/nhapkho');
        }
    }
}
?>