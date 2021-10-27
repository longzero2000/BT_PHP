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
?><form action="" metTENLOAINVd="post" enctype="multipart/form-data">
<table bgcolor="#eeeeee" align="center" width="60%" border="0">
<tr bgcolor="#eeee10">
	<td colspan="2" align="center"><font color="blue"><h2>THÊM CHỨC VỤ</h2></font></td>
</tr>
<tr>
	<td>Mã Chức Vụ: </td>
	<td><input type="text" name="MALOAINV" size="20" value="<?php if(isset($_POST['MALOAINV'])) echo $_POST['MALOAINV'];?>" /></td>
</tr>
<tr>
	<td>Tên Chức Vụ: </td>
	<td><input type="text" name="TENLOAINV" size="50" value="<?php if(isset($_POST['TENLOAINV'])) echo $_POST['TENLOAINV'];?>" /></td>
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
	if(empty($_POST['MALOAINV'])){
		$errors[]="Bạn chưa nhập mã chức vụ";
	}
	else{
		$MALOAINV=trim($_POST['MALOAINV']);
	}
	if(empty($_POST['TENLOAINV'])){
		$errors[]="Bạn chưa tên chức vụ";
	}
	else{
		$TENLOAINV=trim($_POST['TENLOAINV']);
	}
	if(empty($errors))
	{ 
		$query="INSERT INTO loainv VALUES ('$MALOAINV','$TENLOAINV')";
		$result=mysqli_query($dbc,$query);
		if(mysqli_affected_rows($dbc)==1){//neu them thanh cong
			echo "<div align='center'>Thêm mới thành công!</div>";			
			$query="Select LOAINV
		      from LOAINV
		      WHERE MALOAINV ='". $MALOAINV. "'";
			$result=mysqli_query($dbc,$query);
			if(mysqli_num_rows($result)==1)
			{	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
				{
				echo 'Thêm thành công!';
			}			
			}
		}
		else //neu kTENLOAINVng them duoc
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
