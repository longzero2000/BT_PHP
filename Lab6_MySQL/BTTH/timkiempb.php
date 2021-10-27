<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tìm kiếm nhân viên</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include ("header.php");
?><form action="" method="get">
<table bgcolor="#eeeeee" align="center" width="70%" border="1" 
	   cellpadding="5" cellspacing="5" style="border-collapse: collapse;">
<tr>
	<td align="center"><font color="blue"><h3>TÌM KIẾM THÔNG TIN PHÒNG BAN</h3></font></td>
</tr>
<tr>
	<td align="center">Tên phòng ban: <input type="text" name="tenphong" size="30" 
				value="<?php if(isset($_GET['tenphong'])) echo $_GET['tenphong'];?>">
			<input type="submit" name="tim" value="Tìm kiếm"></td>
</tr>
</table>
</form>
<center>
<?php 
if($_SERVER['REQUEST_METHOD']=='GET')
{
	if(empty($_GET['tenphong'])) echo "<p align='center'>Vui lòng nhập tên sản phẩm</p>";
	else
	{
		$tenphong=$_GET['tenphong'];	
		require('ketnoi.php');
		$query="Select NHANVIEN.*, TENLOAINV, TENPHONG
		      from NHANVIEN,LOAINV,PHONGBAN
		      WHERE NHANVIEN.MALOAINV=LOAINV.MALOAINV AND NHANVIEN.MAPHONG=PHONGBAN.MAPHONG
					AND TENPHONG like '%$tenphong%'";
		$result=mysqli_query($dbc,$query);		
		if(mysqli_num_rows($result)<>0)
		{	$rows=mysqli_num_rows($result);
			echo "<div align='center'><b>Phòng $tenphong có $rows nhân viên</b></div>";
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				echo '<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
					<tr bgcolor="#eeeeee"><td colspan="2" align="center"><h3>'.
						$row['HO'].' '.$row['TEN'].'</h3></td></tr>';
				echo '<tr><td width="200px" height="20px" align="center"><img width="100px" height="100px" src="avatar/'.$row['ANH'].'"/></td>';
				echo '<td><b>Ngày sinh: </b>'.$row['NGAYSINH'].'<br />';
				echo '<b>Giới tính:</b>';
				if ($row['GIOITINH']=="1"){
				echo "Nam";
				}
				else
				echo "Nữ";
				echo '<br />';
				echo '<b>Loại nhân viên: </b>'.$row['TENLOAINV'].'<br><b>Phòng: </b>'.
						$row['TENPHONG'];
				echo '</td></tr></table>';
			}
		}
		else echo "<div><font color='red'>Không tìm thấy phòng ban $tenphong.</font></div>";
	}
}
?>
</center>
</body>
</html>
