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

if(isset($xuatkho)){
	foreach ($xuatkho as $key) {};
	$admin = $this->Admin_models->information($key->id_admin);
	if($admin){
		foreach ($admin as $ad) {};
		if(isset($chitietxuat)){
		$i = 1;}
}}
$html = '';
$html = '
<html>
<head>
	<title>Report</title>
	<meta charset="utf-8">
</head>
<body>
<div>
	<div style="text-align:center">
		<h1>Hóa đơn xuất hàng số '.$key->id_xuatkho.'</h1>
	</div>
</div>
<table cellpadding="10px">
	<tr>
		<td style="width: 25%">Ngày tạo:</td>
		<td>'.substr($key->ngaythang,0,10).'</td>
	</tr>
	<tr>
		<td>Thời gian:</td>
		<td>'.substr($key->ngaythang,11,8).'</td>
	</tr>
	<tr>
		<td>Người tạo:</td>
		<td>'.$ad->name.'</td>
	</tr>
</table>
<div style="text-align: center">
	<h4>Thông tin khách hàng</h4>
</div>
<div>
	<table cellpadding="10px">
		<tr>
			<td style="width: 25%">Tên khách hàng:</td>
			<td>'.$key->tenkh.'</td>
		</tr>
		<tr>
			<td>Số điện thoại:</td>
			<td>'.$key->sdt.'</td>
		</tr>
		<tr>
			<td>Điạ chỉ:</td>
			<td>'.$key->diachi.'-'.$key->thanhpho.'</td>
		</tr>
	</table>
</div>
<div style="text-align: center">
	<h4>Danh sách sản phẩm</h4>
</div>
<table  cellpadding = "10px" border="1">
	<tr style="text-align:center">
		<td style="width: 10%">
		STT
		</td>
		<td style="width: 30%">
		Sản phẩm
		</td>
		<td style="width: 20%">
		Giá bán
		</td>
		<td style="width: 20%">
		Số lượng
		</td>
		<td style="width: 20%">
		Thành tiền
		</td>
	</tr>


';
if(isset($chitietxuat)){
	$i = 0;
	foreach ($chitietxuat as $value) {
		$i ++;
$html .='
	<tr style="text-align:center">
		<td>'.$i.'</td>
		<td>
			
            '.$value->sanpham.'
		</td>
		<td>'.number_format($value->gia).'</td>
		<td>'.$value->soluong.'</td>
		<td>'.number_format($value->thanhtien).'</td>
	</tr>

';
	}
}
$html .= '
	<tr style = "text-align: center; background-color: #f5f5f5">
		<td colspan="3" style="text-align: right">Tổng cộng:</td>
		<td>'.number_format($key->soluong).'</td>
		<td>'.number_format($key->thanhtoan).'</td>
	</tr>
</table>
<div style="text-align: right">
<p>Người lập phiếu</p>
<p><sup><i>(Kí và ghi rõ họ tên)</i></sup></p>
</div>
</body>
</html>
';
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
// $pdf->Output('example_006.pdf', 'I');
$pdf->Output('report_xuathang.pdf', 'I');
?>
	