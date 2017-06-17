<?php  
/**
* 
*/
class Xuatkho extends CI_Controller
{
	
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
		        			$this->Kho_models->add_detail($data_add_detail);
		        		}
		        	}redirect('admin/creat_pdf_phieuxuat/'.$value->id_xuatkho);
		        }
            }
        }else{
            $this->load->view('admin/adminlogin');
        }	
	}
}

 ?>