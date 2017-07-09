<?php
class product extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $n = 8;
        $this->db->where('number>','0');
        $sql = $this->db->get('tb_product');
        $numrow = $this->Admin_models->product();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('number>','0');
    	$this->db->limit($n);
        $this->db->group_by('name');
    	$query = $this->db->get('tb_product');
    	$data['product'] = $query->result();
        $danhmuc = $this->User_models->get_danhmuc();
        if($danhmuc){
            $data['danhmuc'] = $danhmuc;
        }
        $this->load->view('product',$data);
    }
    public function page($page){
        $n = 8; 
        $start = ($page-1)*$n;
        $this->db->where('number>','0');
        $sql = $this->db->get('tb_product');
        $numrow = $this->Admin_models->product();
        $data['fullpage'] = ceil($numrow/$n);
        $this->db->where('number>','0');
        $this->db->limit($n,$start);
        $this->db->group_by('name');
        $query = $this->db->get('tb_product');
        $data['product'] = $query->result();
        $danhmuc = $this->User_models->get_danhmuc();
        if($danhmuc){
            $data['danhmuc'] = $danhmuc;
        }
        $this->load->view('product',$data);
    }
    public function catalog($macatalog){
        $this->db->group_by('name');
        $this->db->where('madanhmuc',$macatalog);
        $get = $this->db->get('tb_product');
        if($get->num_rows() > 0){
            $data['product'] = $get->result();
        }
        $danhmuc = $this->User_models->get_danhmuc();
        if($danhmuc){
            $data['danhmuc'] = $danhmuc;
        }
        $this->load->view('product',$data);
    }
    public function login($id){
        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));
        if(isset($email) && isset($pass)){
            $check['user'] = $this->User_models->login($email,$pass);
            if($check['user'] == false){
                $mess="Tài khoản hoặc mật khẩu không chính xác!";
                $data['mess']=$mess;
                $data['id'] = $id;
                $this->load->view('product_login',$data);
            }else{
                foreach($check['user'] as   $item){
                    $name = $item->name;
                    $phone = $item->phone;
                    $address = $item->address;
                }
                $data['phone'] = $phone;
                $data['address'] = $address;
                $session_login = array(
                    'login' => $email ,
                    'name' => $name
                );
                $this->session->set_userdata($session_login);
                if($id == 0){
                    redirect('product');
                }else{
                    redirect('product/view/'.$id);
                }
                
            }   
        }else{
            $data['id'] = $id;
            $this->load->view('product_login',$data);
        }
    }
    public function buy($id)
    {
        $this->load->library("cart");
        $login = $this->session->userdata('login');
        if(!isset($login)){
           redirect('product/login/'.$id);
        }
        $count = $this->session->userdata('count');
        if($count <= 0){
            $count = 0;
        }
        if($login == 'admin'){
            redirect('home');
            die();
        }
        $this->db->where('id=',$id);
        $query = $this->db->get('tb_product');
        if($query->num_rows() > 0){
            $data = $query->result();
        }
        foreach ($data as $item){};
        $img = $item->img;
        $name = $item->name;
        $price =$item->price;
        $max = $item->number;
        $size = $item->size;
        $catalog = $item->madanhmuc;
        $cart = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'qty' => 1,
            'img' => $img,
            'max' => $max,
            'size' => $size,
            'madanhmuc' => $catalog,
        );
        if($this->cart->insert($cart)){
            $count ++;
            $session_data = array(
                'count' => $count,
            );
            $this->session->set_userdata($session_data);
        }
        redirect('product');
    }
    public function view($id_product){
        $data = array();
        // echo $id_product;die();
        $product = $this->User_models->view_product($id_product);
        if($product){
            $data['product'] = $product;
            $size = $this->User_models->get_size($id_product);
            // var_dump($size); die();
            if($size){
                $data['size'] = $size;
            }
        }else $data['err'] = "Không tìm thấy sản phẩm phù hợp!";
        $this->load->view('view_product',$data);
    }
    public function get_size(){
        $id = $this->input->post('id');
        // echo json_encode($id);
        $product = $this->User_models->view_product($id);
        if($product){
            $html = '';
            foreach($product as $prd){
                $html.='<input type="number" name="number" value="1" min="0" max="'.$prd->number.'" class="form-control">';
            }
            echo json_encode($html);
        }
    }

}
?>