<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thông tin phòng ban</title>
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
$strSQL = "SELECT * FROM PHONGBAN";
$result = mysqli_query($dbc,$strSQL);
// Xu ly du lieu tra ve
if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{	echo "<h1 style='color: blue;' align='center'>THÔNG TIN PHÒNG</h1>
		  <table class ='text-center' align='center' width='800' border='1' cellpadding='2' cellspacing='2' 
				style='border-collapse: collapse;'>
		  	<tr style='background-color: #0084ab;' align='center'>
				<td><b>Mã Phòng</b></td>
				<td><b>Tên Phòng</b></td>
		  	</tr>";
	while ($row = mysqli_fetch_array($result))
	{
		{	echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "</tr>";
		}
	}
	echo '</table>';
}
mysqli_close($dbc);
?>
</body>
</html>
