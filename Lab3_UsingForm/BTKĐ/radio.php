<html>
<head>
<title>Bài 5: Tạo form nhập liệu với hộp kiểm radio button</title>
</head>
<body>
	<form action="radio.php" name="myform" method="post">
	<input type="radio" name="radGT" value="Nam"<?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nam') echo 'checked="checked"';?> checked/>		Nam<br>
	<input type="radio" name="radGT" value="Nu" <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nu') echo 'checked="checked"';?>/>
			N&#7919;<br>

	<input type="submit" value="Submit">
</form>
	
	<?php
		if (isset($_POST['radGT'])){
			echo "Giới tính : " . $_POST['radGT'];
		}
	?>
</body>
</html>