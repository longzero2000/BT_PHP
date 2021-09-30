<html> 
<head>
	<title>Bài 1: Tạo form nhập liệu với text field</title></head>
<body>
<form action="input_xuly.php" name="myform" method="post">
	Tên bạn: <input type="test" name="Name" size=20 value="<?php if(isset($_POST['Name'])) echo $_POST['Name'];?>" />
	<br>
	<input type="submit" value="Nhập">
</form>
<?php
	if (isset($_POST["Name"]))
		print "Hello " . $_POST["Name"];
?>
</body>
</html>