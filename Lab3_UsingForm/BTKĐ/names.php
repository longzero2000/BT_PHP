<html> 
<head>
<title>Bài 2: Tạo form nhập liệu với text field</title>
</head>
<body>
	<form action="names.php" name="myform" method="post">
		Tên: <input type="text" name="Name[]" size=20 value="<?php if(isset($_POST['Name'])) echo $_POST['Name'][0];?>"/><br>
		Họ: <input type="text" name="Name[]" size=20 value="<?php if(isset($_POST['Name'])) echo $_POST['Name'][1];?>"/><br>
		<input type="submit" value="Nhập">
	</form>
	
	<?php
		if (isset($_POST['Name'])){
			echo "Chào bạn " . $_POST['Name'][0] . " " . $_POST['Name'][1];
		}
	?>
</body>
</html>