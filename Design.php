<form action = "" method = "POST">
	<table>
		<tr>
			<td colspan="2"> Thêm sản phẩm  </td>
		</tr>
		<tr>
			<td>Mã Hàng </td>
			<td><input type="text" name="txtmahang"></td>
		</tr>
		<tr>
			<td>Tên Hàng </td>
			<td><input type="text" name="txttenhang"></td>
		</tr>
		<tr>
			<td>Nhà cung cấp </td>
			<td><input type="text" name="txtncc"></td>
		</tr>
		<tr>
			<td>Giá </td>
			<td><input type="text" name="txtgia"></td>
		</tr>
		<tr>
			<td><input type="submit" name="btnok" value="Thêm">
				<input type="reset" name="btncancel" value="Nhập Lại"></td>
		</tr>
	</table>
	

</form>
<?php
error_reporting(0);
$mahang =$_POST["txtmahang"];
$tenhang  =$_POST["txttenhang"];
$ncc  =$_POST["txtncc"];
$gia  = $_POST["txtgia"];



$conn = mysqli_connect("localhost", "root","","qlbh");


$str = "insert into vanphongpham(mah,tenhang,NCC,gia) VALUES ('$mahang','$tenhang','$ncc','$gia')";
$result = mysqli_query($conn,$str);



mysqli_close($connn);
?>