<?php
class home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->db->order_by('id','DESC');
        $this->db->limit('8');
        $this->db->where('number>','0');
        $query = $this->db->get('tb_product');
        $data['newproduct'] = $query->result();
        $this->load->view('home',$data);
    }
    public function register(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));
        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $pass,
        );
        $register = $this->User_models->register($data);
        if($register == false){
            $err = "Email already exists !";
            $data['err'] = $err;
            $this->load->view('register',$data);
        }else
        {
            if ($register == true) {
                $check = $this->User_models->login($email,$pass);
                if ($check == true) {
                    $session_data = array(
                        'login' => $email,
                        'name' => $name,
                    );
                    $this->session->set_userdata($session_data);
                    redirect('home');
                }
            }
        }
    }
    public function login(){
        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));
        $check['user'] = $this->User_models->login($email,$pass);
        if($check['user'] == false){
            $mess="Email or password is incorrect!";
            $data['mess']=$mess;
            $this->load->view('login',$data);
        }else{
            foreach($check['user'] as   $item){
                $name = $item->name;
                $phone = $item->phone;
                $address = $item->address;
            }
            $data['phone'] = $phone;
            $data['address'] = $address;
            $this->load->view('admin',$data);
            $session_login = array(
                'login' => $email ,
                'name' => $name
            );
            $this->session->set_userdata($session_login);
            redirect('home');
        }
    }
    public function buy($id){
        $login = $this->session->userdata('login');
        $count = $this->session->userdata('count');
        $this->load->library("cart");
        if(isset($login) && $login=='admin'){
            redirect('home');
            die();
        }
        $soluongmua = $this->input->post('number');
        if(isset($soluongmua)){
            $soluong = $soluongmua;
        }else $soluong = 1;
        $this->db->where('id=',$id);
        $query_product = $this->db->get('tb_product');
        $product = $query_product->result();
        foreach($product as $item){};
        $name = $item->name;
        $price = $item->price;
        $img = $item->img;
        $number = $item->number;
        $cart = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'qty' => $soluong,
            'img' => $img,
            'max' => $number,
        );
        if($this->cart->insert($cart)){
            $count +=$soluong;
            $session_data = array(
                'count' => $count,
            );
            $this->session->set_userdata($session_data);
            redirect('home');
        }
    }
}
?>