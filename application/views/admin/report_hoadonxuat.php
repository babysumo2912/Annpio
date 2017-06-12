<?php 
// include'header_admin.php';
?>
<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}
$pdf->AddPage();
if(isset($xuatkho)){
	foreach ($xuatkho as $key) {};
	$admin = $this->Admin_models->information($key->id_admin);
	if($admin){
		foreach ($admin as $ad) {};
		if(isset($chitietxuat)){
		$i = 1;}
}}
$html = '
<div>
	<div style="text-align:center">
		<h1>Hoa don xuat hang so '.$key->id_xuatkho.'</h1>
	</div>
</div>
<table cellpadding="10px">
	<tr>
		<td style="width: 25%">Ngay tao:</td>
		<td>'.substr($key->ngaythang,0,10).'</td>
	</tr>
	<tr>
		<td>Thoi gian:</td>
		<td>'.substr($key->ngaythang,11,8).'</td>
	</tr>
	<tr>
		<td>Nguoi tao:</td>
		<td>'.$ad->name.'</td>
	</tr>
</table>
<div style="text-align: center">
	<h4>Thông tin khách hàng</h4>
</div>
<div>
	<table cellpadding="10px">
		<tr>
			<td style="width: 25%">Ten khach hang:</td>
			<td>'.$key->tenkh.'</td>
		</tr>
		<tr>
			<td>So dien thoai:</td>
			<td>'.$key->sdt.'</td>
		</tr>
		<tr>
			<td>Dia chi:</td>
			<td>'.$key->diachi.'-'.$key->thanhpho.'</td>
		</tr>
	</table>
</div>
<div style="text-align: center">
	<h4>Danh sach san pham</h4>
</div>
<table  cellpadding = "10px" border="1">
	<tr style="text-align:center">
		<td style="width: 10%">
		STT
		</td>
		<td style="width: 30%">
		San pham
		</td>
		<td style="width: 20%">
		Gia ban
		</td>
		<td style="width: 20%">
		So luong
		</td>
		<td style="width: 20%">
		Thanh tien
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
		<td colspan="3" style="text-align: right">Tong cong:</td>
		<td>'.number_format($key->soluong).'</td>
		<td>'.number_format($key->thanhtoan).'</td>
	</tr>
</table>
<div style="text-align: right">
<p>Nguoi lap phieu</p>
<p><sup><i>(Ki va ghi ro ho ten)</i></sup></p>
</div>
';
$pdf->writeHTML($html, true, 0, false, 0);
$pdf->lastPage();
$pdf->Output('report_xuathang.pdf', 'I');
?>
	