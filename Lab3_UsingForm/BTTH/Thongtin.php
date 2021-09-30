<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
		
        $hoten = $_POST['hoten'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $gt = $_POST['gt'];
        $quoctich = $_POST['quoctich'];
        $gc = $_POST['gc'];
		if($hoten==null&&$diachi==null)
		{
			header("location:javascript://history.go(-1)");
		}
?>
        <h1>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h1>
            <p>Họ tên: <?php if(isset($_POST["hoten"])) { echo $_POST["hoten"]; } ?></p>
            <p>Giới tính: <?php if(isset($_POST["gt"])) { echo $_POST["gt"]; } ?></p>
            <p>Địa chỉ:<?php if(isset($_POST["diachi"])) { echo $_POST["diachi"]; } ?> </p>
            <p>Điẹn thoai: <?php if(isset($_POST["sdt"])) { echo $_POST["sdt"]; } ?></p>
            <p>Quốc tịch: <?php if(isset($_POST["quoctich"])) { echo $_POST["quoctich"]; } ?></p>
            <p>Môn học:<?php if(isset($_POST["mh1"])) { echo $_POST["mh1"]; } ?>, <?php if(isset($_POST["mh2"])) { echo $_POST["mh2"]; } ?> ,
            <?php if(isset($_POST["mh3"])) { echo $_POST["mh3"]; } ?><?php if(isset($_POST["mh4"])) { echo $_POST["mh4"]; } ?></p>
            <p>Ghi chú:<?php if(isset($_POST["gc"])) { echo $_POST["gc"]; } ?></p>
            <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
</body>
</html>