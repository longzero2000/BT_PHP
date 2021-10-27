<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thông tin nhân viên</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("header.php");
?>
<?php 
// Ket noi CSDL
require("ketnoi.php");
// Chuan bi cau truy van & Thuc thi cau truy van
$strSQL = "Select NHANVIEN.*, TENLOAINV, TENPHONG
		      from NHANVIEN,LOAINV,PHONGBAN
		      WHERE NHANVIEN.MALOAINV=LOAINV.MALOAINV AND NHANVIEN.MAPHONG=PHONGBAN.MAPHONG";
$result = mysqli_query($dbc,$strSQL);
// Xu ly du lieu tra ve
if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{	echo "<h1 style='color: blue;' align='center'>THÔNG TIN NHÂN VIÊN</h1>
		  <table class ='text-center' align='center' width='800' border='1' cellpadding='2' cellspacing='2' 
				style='border-collapse: collapse;'>
		  	<tr style='background-color: #0084ab;' align='center'>
				<td><b>Mã Nhân Viên</b></td>
				<td><b>Họ Và Tên</b></td>
				<td><b>Ngày Sinh</b></td>
				<td><b>Giới Tính</b></td>
				<td><b>Địa Chỉ</b></td>
				<td><b>Ảnh</b></td>
				<td><b>Chức Vụ</b></td>
				<td><b>Phòng, Ban</b></td>
		  	</tr>";
	while ($row = mysqli_fetch_array($result))
	{
		{	echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1] $row[2]</td>";
			echo "<td>$row[3]</td>";
			if ($row[4]=="1"){
				echo "<td>Nam</td>";
			}
			else
				echo "<td>Nữ</td>";
			echo "<td>$row[5]</td>";
			echo '<td><img width="100px" height="100px" alt="Không có ảnh" src="avatar/'.$row['ANH'].'"/></td>';
			echo "<td>$row[TENLOAINV]</td>";
			echo "<td>$row[TENPHONG]</td>";
			echo "</tr>";
		}
	}
	echo '</table>';
}
//Dong ket noi
mysqli_close($dbc);
?>
</body>
</html>
