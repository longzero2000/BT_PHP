<html> 
<head>
	<title>Bài 3: Tạo form nhập liệu với multipleline text</title></head>
<body>
<form action="textarea.php" name="myform" method="post">
	Bình luận của bạn: 
	<br>
	<textarea name="comment" rows="3" cols="40"><?php if(isset($_POST['comment'])) echo $_POST['comment']; ?></textarea>
	<br>
	<input type="submit" value="Đăng">
</form>
<?php
	if (isset($_POST["comment"]))
		print "Bình luận của bạn: " . $_POST["comment"];
?>
</body>
</html>