<html>
<head>
<title>Bài 4: Tạo form nhập liệu với hộp kiểm checkbox</title>
</head>
<body>
<form method="post" action="checkbox.php">
	<input type="checkbox" name="chk1" value="en" 
		<?php if(isset($_POST['chk1'])&& $_POST['chk1']=='EN') echo 'checked'; else echo ""?>/>English <br> 
	<input type="checkbox" name="chk2" value="vn"
		<?php if(isset($_POST['chk2'])&& $_POST['chk2']=='VN') echo 'checked'; else echo ""?>/>Vietnam<br>
	<input type="submit" value="submit"><br>
</form>
<?php
	if(isset($_POST['chk1'])) echo "Checkbox 1 : " . $_POST['chk1'] . "<br>";
	if(isset($_POST['chk2'])) echo "Checkbox 2 : " . $_POST['chk2'];
		
?>

</body>
</html>