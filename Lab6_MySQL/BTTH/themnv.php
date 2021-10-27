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
?><form action="" method="post" enctype="multipart/form-data">
<table bgcolor="#eeeeee" align="center" width="60%" border="0">
<tr bgcolor="#eeee10">
	<td colspan="2" align="center"><font color="blue"><h2>THÊM NHÂN VIÊN</h2></font></td>
</tr>
<tr>
	<td>Mã Nhân Viên: </td>
	<td><input type="text" name="MANV" size="20" value="<?php if(isset($_POST['MANV'])) echo $_POST['MANV'];?>" /></td>
</tr>
<tr>
	<td>Họ Nhân Viên: </td>
	<td><input type="text" name="HO" size="50" value="<?php if(isset($_POST['HO'])) echo $_POST['HO'];?>" /></td>
</tr>
<tr>
	<td>Tên Nhân Viên: </td>
	<td><input type="text" name="TEN" size="50" value="<?php if(isset($_POST['TEN'])) echo $_POST['TEN'];?>" /></td>
</tr>
<tr>
	<td>Ngày Sinh: </td>
	<td><input type="date" name="NGAYSINH" size="20" value="<?php if(isset($_POST['NGAYSINH'])) echo $_POST['NGAYSINH'];?>" /></td>
</tr>
<tr>
	<td>Chức Vụ:</td>
	<td><select name="loainv">
			<?php 
				$query="select * from loainv";
				$result=mysqli_query($dbc,$query);
				if(mysqli_num_rows($result)<>0){
					while($row=mysqli_fetch_array($result)){
						$MALOAINV=$row['MALOAINV'];
						$TENLOAINV=$row['TENLOAINV'];
						echo "<option value='$MALOAINV' "; 
								if(isset($_REQUEST['loainv']) && ($_REQUEST['loainv']==$MALOAINV)) echo "selected='selected'";
						echo ">$TENLOAINV</option>";
					}
				}
				mysqli_free_result($result);
			?>								
		</select>
	</td>
</tr>
<tr>
	<td>Phòng ban: </td>
	<td><select name="phongban">
			<?php 
				$query="select * from phongban";
				$result=mysqli_query($dbc,$query);
				if(mysqli_num_rows($result)<>0){
					while($row=mysqli_fetch_array($result)){
						$MAPHONG=$row['MAPHONG'];
						$TENPHONG=$row['TENPHONG'];
						echo "<option value='".$MAPHONG."' "; 
							if(isset($_REQUEST['phongban']) && ($_REQUEST['phongban']==$MAPHONG)) echo "selected='selected'";
						echo ">".$TENPHONG."</option>";
					}
				}
				mysqli_free_result($result);
			?>								
		</select>
	</td>
</tr>
<tr>
	<td>Giới tính: </td>
	<td> <input type="checkbox" name="GIOITINH" value="1">Nam <input type="checkbox" name="GIOITINH" value="0">Nữ</td>
</tr>
<tr>
	<td>Địa chỉ: </td>
	<td><input type="text" name="DIACHI" size="20" value="<?php if(isset($_POST['DIACHI'])) echo $_POST['DIACHI'];?>" /></td>
</tr>
<tr>
	<td>Hình ảnh: </td>
	<td><input type="FILE" name ="ANH" size="80" value="<?php if(isset($_POST['ANH'])) echo $_POST['ANH'];?>" /></td>
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
	if(empty($_POST['MANV'])){
		$errors[]="Bạn chưa nhập mã nhân viên";
	}
	else{
		$MANV=trim($_POST['MANV']);
	}
	//kiểm tra tên
	if(empty($_POST['TEN'])){
		$errors[]="Bạn chưa nhập tên nhân viên";
	}
	else{
		$TEN=trim($_POST['TEN']);
	}
		//kiểm tra họ
	if(empty($_POST['HO'])){
		$errors[]="Bạn chưa nhập họ nhân viên";
	}
	else{
		$HO=trim($_POST['HO']);
	}
	if(empty($_POST['NGAYSINH'])){
		$errors[]="Bạn chưa chọn ngày sinh!";
	}
	else{
		$NGAYSINH=trim($_POST['NGAYSINH']);
	}
	//cap nhat mã phòng và mã loa
	$MAPHONG=$_POST['phongban'];
	$MALOAINV=$_POST['loainv'];
	//kiem tra giới tính
	if(empty($_POST['GIOITINH'])){
		$GIOITINH=0;
	}
	else{
		$GIOITINH=trim($_POST['GIOITINH']);
	}
	//kiem tra địa chỉ
	if(empty($_POST['DIACHI'])){
		$errors[]="Bạn chưa nhập địa chỉ";
	}
	else{
		$DIACHI=trim($_POST['DIACHI']);
	}
	//kiểm tra hình sản phẩm và thực hiện upload file
	if($_FILES['ANH']['name']!=""){
		$ANH=$_FILES['ANH'];
		$ten_ANH=$ANH['name'];
		$type=$ANH['type'];
		$size=$ANH['size'];
		$tmp=$ANH['tmp_name'];
		if(($type=='image/jpeg' || ($type=='image/bmp') || ($type=='image/gif') && $size<8000))
		{
			move_uploaded_file($tmp,"avatar/".$ten_ANH);
		}
	}
	if(empty($errors))//neu khong co loi xay ra
	{ 
		$query="INSERT INTO nhanvien VALUES ('$MANV','$HO','$TEN','$NGAYSINH','$GIOITINH','$DIACHI','$ten_ANH','$MALOAINV','$MAPHONG')";
		$result=mysqli_query($dbc,$query);
		if(mysqli_affected_rows($dbc)==1){//neu them thanh cong
			echo "<div align='center'>Thêm mới thành công!</div>";			
			$query="Select NHANVIEN.*, TENLOAINV, TENPHONG
		      from NHANVIEN,LOAINV,PHONGBAN
		      WHERE NHANVIEN.MALOAINV=LOAINV.MALOAINV AND NHANVIEN.MAPHONG=PHONGBAN.MAPHONG AND MANV ='". $MANV. "'";
			$result=mysqli_query($dbc,$query);
			if(mysqli_num_rows($result)==1)
			{	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
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
		}
		else //neu khong them duoc
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
