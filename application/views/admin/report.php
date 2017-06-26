<?php 
// include'header_admin.php';

?>
<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' - Lai Thi Lan Anh - 1221050146', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
$html = '';
$html = '
<div>
	<div style="text-align:center">
		<h1>Danh sách các đơn hàng onlline</h1>
		<p><u> Từ ngày'.$day_begin.' đến '.$day_end.'</u></p>
	</div>
</div>';
if(isset($hoadon)){
	$i = 0;
	foreach ($hoadon as $hd) {
		$i++;
		if($hd->active == '1'){
			$tt = "Đã giao";
		};
		if($hd->active == '0'){
			$tt = "Chưa xác nhận";
		}
$html .='
<p>Đơn hàng thứ '.$i.'</p>
<p>Tên khách hàng: '.$hd->name.'</p>
<p>Địa chỉ: '.$hd->address.' - '.$hd->city.'</p>
<p>SĐT: '.$hd->phone.'</p>
<p>Thanh toán: '.number_format($hd->money).'</p>
<p>Tình trạng: '.$tt.'</p>
<p>Ghi chú:'.$hd->ghichu.'</p>
<p>Ngày mua: '.$hd->date.'</p>
	';
$chitiethoadon = $this->Hoa_don_models->view_single_order($hd->id);
if($chitiethoadon){
$html.='
<table cellpadding="10px" border="1">
	<tr>
		<td style="width:8%">STT</td>
		<td style="width:30%">Sản phẩm</td>
		<td style="width:10%">Size</td>
		<td style="width:15%">Số lượng</td>
		<td style="width:20%">Đơn giá</td>
		<td style="width:20%">Thành tiền</td>
	</tr>
	';
	$j = 0;
	foreach ($chitiethoadon as $cthd) {
		$j++;
$html.='
	<tr>
		<td>'.$j.'</td>
		<td>'.$cthd->name.'</td>
		<td>'.$cthd->size.'</td>
		<td>'.$cthd->qty.'</td>
		<td>'.number_format($cthd->price).'</td>
		<td>'.number_format($cthd->subtotal).'</td>
	</tr>

';	
	}
}
$html.='
</table>
<br><br>
';

	}
}


$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();
$pdf->AddPage();
$html = '';
$html = '
<div>
	<div style="text-align:center">
		<h1>Danh sách các đơn hàng offline</h1>
		<p><u> Từ ngày'.$day_begin.' đến '.$day_end.'</u></p>
	</div>
</div>';
if(isset($hoadon_off)){
	$i = 0;
	foreach ($hoadon_off as $hd) {
		$i++;
$html .='
<p>Đơn hàng thứ '.$i.'</p>
<p>Tên khách hàng: '.$hd->tenkh.'</p>
<p>Địa chỉ: '.$hd->diachi.' - '.$hd->thanhpho.'</p>
<p>SĐT: '.$hd->sdt.'</p>
<p>Thanh toán: '.number_format($hd->thanhtoan).'</p>
<p>Tình trạng: '.$hd->trangthai.'</p>
<p>Ngày mua: '.$hd->ngaythang.'</p>
	';
$chitiethoadon = $this->Admin_models->view_phieuxuat($hd->id_xuatkho);
if($chitiethoadon){
$html.='
<table cellpadding="10px" border="1">
	<tr>
		<td style="width:8%">STT</td>
		<td style="width:30%">Sản phẩm</td>
		<td style="width:10%">Size</td>
		<td style="width:15%">Số lượng</td>
		<td style="width:20%">Đơn giá</td>
		<td style="width:20%">Thành tiền</td>
	</tr>
	';
	$j = 0;
	foreach ($chitiethoadon as $cthd) {
		$j++;
$html.='
	<tr>
		<td>'.$j.'</td>
		<td>'.$cthd->sanpham.'</td>
		<td>'.$cthd->size.'</td>
		<td>'.$cthd->soluong.'</td>
		<td>'.number_format($cthd->gia).'</td>
		<td>'.number_format($cthd->thanhtien).'</td>
	</tr>

';	
	}
}
$html.='
</table>
<br><br>
';

	}
}

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
// $pdf->Output('example_006.pdf', 'I');
$pdf->Output('report_xuathang.pdf', 'I');
?>
	