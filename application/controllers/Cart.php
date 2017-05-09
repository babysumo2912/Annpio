<?php
class Cart extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library("cart");
    }
    public function index(){
        $money = 0;
        $login = $this->session->userdata('login');
        if(isset($login) && $login == 'admin'){
            redirect('home');
        }
        $cart = $this->cart->contents();
        foreach ($cart as $item){
            $money += $item['subtotal'];
        }
        $total = $this->cart->total_items();
        $session_data = array(
            'count' => $total,
            'money' => $money,
        );
        $this->session->set_userdata($session_data);
        $data['cart'] = $cart;
        $this->load->view('cart',$data);
    }
    public function capnhap()
    {
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
        redirect('cart');
    }
    public function delete_cart_all(){
        $this->cart->destroy();
        redirect('cart');
    }
    public function delete_cart($rowid){
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        redirect('cart');
    }
}
?>