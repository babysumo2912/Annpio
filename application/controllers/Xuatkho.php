<?php  
/**
* 
*/
class xuatkho extends CI_Controller
{

	public function index(){
		$login = $this->session->userdata('admin');
        $time = $this->session->userdata('time');
        $err = $this->session->flashdata('err');
        $data_search = $this->session->flashdata('data_search');
        $err_search = $this->session->flashdata('err_search');
        $check = $this->session->flashdata('check');
        $cart_offline = $this->session->userdata('cart_off');
        $err_buy = $this->session->flashdata('err_buy');
        if(isset($err_buy)){
        	$data['err_buy'] = $err_buy;
        }
        if(isset($cart_offline)){
        	$data['cart_offline'] = $cart_offline;
        }
        if(isset($check)){
        	$data['check'] = $check;
        }
        if(isset($data_search)){
        	$data['data_search'] = $data_search;
        }
        if(isset($err_search)){
        	$err = $err_search;
        }
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
                $this->load->view('admin/xuatkho',$data);
            }
        }else{
            $this->load->view('admin/adminlogin');
        }
	}
	public function check_sp($id){
        $data = $this->Admin_models->get_single($id);
        if($data){
            $this->session->set_flashdata('check',$data);
            redirect('xuatkho');
        }
    }
	public function searchsp(){
		$key =  $this->input->post('key');
        $search = $this->Admin_models->search_sp($key);
        if($search!=false){
            $this->session->set_flashdata('data_search',$search);
            redirect('xuatkho');
        }else{

            $err = "Không tìm thấy sản phẩm phù hợp";
            $this->session->set_flashdata('err_search',$err);
            redirect('xuatkho');
        }
	}
	public function hoadon($id){
		$data = array();
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
		        $view_single = $this->Hoa_don_models->view_single($id);
		        $view_single_order= $this->Hoa_don_models->view_single_order($id);
		        if($view_single == false || $view_single_order == false){
		        	echo "Hóa đơn bạn chọn không tìm thấy trong CSDL";
		        	die();
		        }else{
		        	$data['view_single'] = $view_single;
		        	$data['view_single_order'] = $view_single_order;
		        }
		        $this->load->view('admin/phieuxuat',$data);
            }
        }else{
            $this->load->view('admin/adminlogin');
        }
	}
	public function luucsdl($id){
		$data = array();
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
		        $view_single = $this->Hoa_don_models->view_single($id);
		        $view_single_order= $this->Hoa_don_models->view_single_order($id);
		        if($view_single == false || $view_single_order == false){
		        	echo "Hóa đơn bạn chọn không tìm thấy trong CSDL";
		        	die();
		        }else{
		        	$number = 0;
		        	foreach ($view_single as $key) {};
		        	foreach ($view_single_order as $row) {
		        		$number+= $row->qty;
		        	}
		        	$data_add = array(
		        		'id_admin' => $login,
		        		'tenkh' => $key->name,
		        		'sdt' => $key->phone,
		        		'diachi' => $key->address,
		        		'thanhpho' => $key->city,
		        		'thanhtoan' => $key->money,
		        		'soluong' => $number,
		        		'trangthai' => 'Đơn online'.$key->id,
		        		);
		        	$data_update = array(
		        		'active' => '1',
		        		);
		        	$this->Hoa_don_models->edit($id,$data_update);
		        	$add = $this->Kho_models->add($data_add);
		        	if(isset($add)){
		        		foreach ($add as $value) {};
		        		foreach ($view_single_order as $item) {
		        			$data_add_detail = array(
		        				'id_xuatkho' => $value->id_xuatkho,
		        				'img' => $item->img,
		        				'sanpham' => $item->name,
		        				'soluong' => $item->qty,
		        				'gia' => $item->price,
		        				'thanhtien' => $item->subtotal,
		        				);
		        			$product = $this->Admin_models->get_single($item->id_product);
		        			foreach ($product as $prd) {};
		        			$soluongmoi = $prd->number_kho - $item->qty;
		        			$update_number = array(
		        				'number_kho' => $soluongmoi,
		        				);
		        			$this->Admin_models->edit($item->id_product,$update_number);
		        			$this->Kho_models->add_detail($data_add_detail);
		        		}
		        	}redirect('admin/creat_pdf_phieuxuat/'.$value->id_xuatkho);
		        }
            }
        }else{
            $this->load->view('admin/adminlogin');
        }	
	}
	public function buy(){
		$masanpham = $this->input->post('masanpham');        
        $soluong = $this->input->post('soluong');
        if(isset($masanpham)&& isset($soluong)){
        	$array_masp = explode(' ',$masanpham);
            $data_product = $this->Admin_models->get_single($array_masp['1']);
            if($data_product){
                foreach($data_product as $dtp){};
                $id = $dtp->id;
                $tensanpham = $dtp->name;
                $giaban = $dtp->price;
                $img = $dtp->img;
            }
           	$cart_array = array(
           		'id' => $id,
           		'tensanpham' => $tensanpham,
           		'giaban' => $giaban,
           		'img' => $img,
           		'soluong' => $soluong,
           		);
           	if(!isset($_SESSION['cart_off']) || count($_SESSION['cart_off'])<=0){
           		$_SESSION['cart_off'][] = $cart_array;
           	}else{
           		$check = true;
           		foreach ($_SESSION['cart_off'] as $key => $value) {
           			if($value['id'] == $cart_array['id']){
           				$data_product = $this->Admin_models->get_single($value['id']);
           				foreach ($data_product as $dtp) {};
           				$check = false;
           				$soluongmoi = $value['soluong'] + $soluong;
           				
           				if($soluongmoi-$dtp->number > 0){
           					$err_buy = "Sản phẩm trong kho đã hêt!";
           					$this->session->set_flashdata('err_buy',$err_buy);
           					redirect('xuatkho');
           				}else{
           					$_SESSION['cart_off'][$key]['soluong'] = $soluongmoi;
           				}
           			}
           		}
           		if($check == true){
           			$_SESSION['cart_off'][] = $cart_array;
           		}
           	}
           	redirect('xuatkho');
        }
	}
	public function delete($id){
		foreach ($_SESSION['cart_off'] as $key => $value) {
			if($value['id'] == $id){
				unset($_SESSION['cart_off'][$key]);
				redirect('xuatkho');
			}
		}
	}
	public function xuatkho_off(){
		$id_admin = $this->session->userdata('admin');
		$tenkhachhang = $this->input->post('khachhang');
		$sdt = $this->input->post('phone');
		$diachi = $this->input->post('diachi');
		$thanhpho = $this->input->post('city');
		if(!isset($_SESSION['cart_off']) || count($_SESSION['cart_off']) <= 0){
			$err = "Hoá đơn không có giá trị!";
			$this->session->set_flashdata('err_buy',$err);
			redirect('xuatkho');
		}
		if(isset($id_admin) && isset($tenkhachhang) && isset($sdt) && isset($diachi) && isset($thanhpho)){
			$money = 0;
			$number = 0;
			if(isset($_SESSION['cart_off']) && count($_SESSION['cart_off']) > 0){
				foreach ($_SESSION['cart_off'] as $key => $value) {
					$money += ($value['giaban'] * $value['soluong']);
					$number += $value['soluong'];
				}
			}
			$data_add = array(
				'id_admin' => $id_admin,
				'tenkh' => $tenkhachhang,
				'sdt' => $sdt,
				'diachi' => $diachi,
				'thanhpho' => $thanhpho,
				'thanhtoan' => $money,
				'soluong' => $number,
				'trangthai' => "Don offline",
				);
			$xuatkho_off = $this->Kho_models->add($data_add);
			if($xuatkho_off){
				foreach ($xuatkho_off as $xko) {};
				$id_xuatkho = $xko->id_xuatkho;
				if(isset($_SESSION['cart_off']) && count($_SESSION['cart_off']) > 0){
					foreach ($_SESSION['cart_off'] as $key => $value) {
						$data_add_ct = array(
							'id_xuatkho' => $id_xuatkho,
							'img' =>$value['img'],
							'sanpham' => $value['tensanpham'],
							'soluong' => $value['soluong'],
							'gia' => $value['giaban'],
							'thanhtien' => $value['soluong'] * $value['giaban'],
							);
            $product = $this->Admin_models->get_single ($value['id']);
            foreach ($product as $prd) {};
            $new_number = $prd->number - $value['soluong'];
            $new_number_kho = $prd->number_kho - $value['soluong'];
            $update_number = array(
              'number' => $new_number,
              'number_kho' => $new_number_kho,
              );
            $this->Admin_models->edit($value['id'],$update_number);
						$this->Kho_models->add_detail($data_add_ct);
					}
				}	
			}
		}
		unset($_SESSION['cart_off']);
       	redirect('admin/view_phieuxuat/'.$id_xuatkho);
        
	}
}

 ?>