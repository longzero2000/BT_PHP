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
include ("ketnoi.php");
?><form action="" metTENPHONGd="post" enctype="multipart/form-data">
<table bgcolor="#eeeeee" align="center" width="60%" border="0">
<tr bgcolor="#eeee10">
	<td colspan="2" align="center"><font color="blue"><h2>THÊM PHÒNG BAN</h2></font></td>
</tr>
<tr>
	<td>Mã Phòng Ban: </td>
	<td><input type="text" name="MAPHONG" size="20" value="<?php if(isset($_POST['MAPHONG'])) echo $_POST['MAPHONG'];?>" /></td>
</tr>
<tr>
	<td>Tên Phòng Ban: </td>
	<td><input type="text" name="TENPHONG" size="50" value="<?php if(isset($_POST['TENPHONG'])) echo $_POST['TENPHONG'];?>" /></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name ="them" size="10" value="Thêm mới" /></td>
</tr>
</table>
</form>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$errors=array(); //khởi tạo 1 mảng chứa lỗi
	//kiem tra mã
	if(empty($_POST['MAPHONG'])){
		$errors[]="Bạn chưa nhập mã phòng";
	}
	else{
		$MAPHONG=trim($_POST['MAPHONG']);
	}
	if(empty($_POST['TENPHONG'])){
		$errors[]="Bạn chưa tên phòng";
	}
	else{
		$TENPHONG=trim($_POST['TENPHONG']);
	}
	if(empty($errors))
	{ 
		$query="INSERT INTO phongban VALUES ('$MAPHONG','$TENPHONG')";
		$result=mysqli_query($dbc,$query);
		if(mysqli_affected_rows($dbc)==1){//neu them thanh cong
			echo "<div align='center'>Thêm mới thành công!</div>";			
			$query="Select phongban.*,MAPHONG
		      from phongban
		      WHERE MAPHONG ='". $MAPHONG. "'";
			$result=mysqli_query($dbc,$query);
			if(mysqli_num_rows($result)==1)
			{	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
				{
				echo 'Thêm thành công!';
			}			
			}
		}
		else //neu kTENPHONGng them duoc
		{
			echo "<p>Có lỗi, không thể thêm được</p>";
			echo "<p>".mysqli_error($dbc)."<br/><br />Query: ".$query."</p>";	
		}
	}
	else
	{//neu co loi
		echo "<h2>Lá»—i</h2><p>Có lỗi xảy ra:<br/>";
		foreach($errors as $msg)
		{
			echo "- $msg<br /><\n>";
		}
		echo "</p><p>Hãy thử lại.</p>";
	}
}
mysqli_close($dbc);
?>
</center>
</body>
</html>
