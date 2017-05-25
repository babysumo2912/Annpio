<?php
class Thanhtoan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library("cart");
        $login = $this->session->login;
        $money = $this->session->userdata('money');
        if($login == 'admin' || $money == 0){
            redirect('home');
        }
    }
    public function index(){
        $cart = $this->cart->contents();
        $data['cart'] = $cart;
        $this->load->view('thanhtoan',$data);
    }
    //full code them hoa don
    public function save_order(){
        if($this->input->post('ghichu')){
            $ghichu = $this->input->post('ghichu');
        }else{$ghichu = "";}
        $email = $this->input->post('email');
        $name_kh = $this->input->post('name');
        $phone = $this->input->post('phonenumber');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $money = $this->session->userdata('money');
        $ship = 40000;
        $data = array(
            'email' => $email,
            'name' => $name_kh,
            'phone' => $phone,
            'address' => $address,
            'city' => $city,
            'money' => $money,
            'ship' => $ship,
            'ghichu' => $ghichu,
            'active' => 0,
        );
        $insert_order = $this->User_models->insert_order($data);
        if($insert_order == false){
            $err= "Saving order Fail!";
            $err['err'] = $err;
            $this->load->view('thanhtoan',$err);
        }else {
            foreach ($insert_order as $item){}
            $mahoadon = $item->id;
            if($cart = $this->cart->contents()){
                foreach ($cart as $item){
                    $product = $item['name'];
                    $img = $item['img'];
                    $qty = $item['qty'];
                    $price = $item['price'];
                    $moneypro = $item['subtotal'];
                    $data_product = array(
                        'mahoadon' => $mahoadon,
                        'name' => $product,
                        'img' => $img,
                        'qty' => $qty,
                        'price' => $price,
                        'subtotal' => $moneypro,
                    );
                    $this->User_models->set_order($data_product);
                    $id = $item['id'];
                    $get_number = $this->Admin_models->get_single($id);
                    foreach ($get_number as $row){}
                    $number_new = $row->number - $qty;
                    $data_product_new = array(
                        'number' => $number_new,
                    );
                    $this->Admin_models->edit($id,$data_product_new);
                }
            }
            $session = array(
                'mahoadon' => $mahoadon,
            );
            $this->session->set_userdata($session);
            $this->cart->destroy();
            $this->session->unset_userdata('money');
            $this->session->unset_userdata('count');
            redirect('thanks');
        }
    }
}

?>