<?php
error_reporting(0);

	
	$conn = mysqli_connect("localhost","root","","qlbh");
	$str = "select *from vanphongpham  where NCC = 'Thiên Long'";
	$result = mysqli_query($conn,$str);
	echo 'Danh sách những sản phẩm thuộc nhà cung cấp Thiên Long ';
	echo '<table border = 1>';
	echo '<tr><td>Mã Hàng</td><td>Tên Hàng</td><td>Nhà cung cấp</td><td>Giá</td></tr>';
	while ($row = mysqli_fetch_row($result))
	{
		echo "<row>";
		echo '<td>'.$row[0].'</td>';
		echo '<td>'.$row[1].'</td>';
		echo '<td>'.$row[2].'</td>';
		echo '<td>'.$row[3].'</td>';
		echo '</tr>';
	}
	echo '</table>';
	
	mysql_close($conn);


?>