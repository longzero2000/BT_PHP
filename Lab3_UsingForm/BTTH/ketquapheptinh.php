<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả phép tính</title>
	<style>
	td {
		font-weight: bold;
	}
	</style>
</head>
<body>
    <?php
        $first = $_POST["stn"];
        $second = $_POST["sth"];
        $ptinh = $_POST["ptinh"];
        if($_POST['ptinh'] == "cong") {
            $ptinh = "Cộng";
            $kq = $first + $second;
        }
        else if($_POST['ptinh'] == "tru") {
            $ptinh = "Trừ";
            $kq = $first - $second;
        }
        else if($_POST['ptinh'] == "nhan") {
            $ptinh = "Nhân";
            $kq = $first * $second;
        }
        else if($_POST['ptinh'] == "chia") {
            $ptinh = "Chia";
            $kq = $first / $second;
        }
    ?>
    <table align="center">
        <tr>
            <th colspan="5" align="center"><h3><font color="blue">PHÉP TÍNH TRÊN HAI SỐ</font></h3></th>
        </tr>
        <tr>
            <td style="color:red;">Chọn phép tính:</td>
            <td style="color:blue;"><?php echo $ptinh; ?></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="color:blue;">Số thứ nhất:</td>
            <td ><input type="text" name="stn" disabled="disabled" value="<?php echo $first;?>"/></td>
        </tr>
        <tr>
            <td style="color:blue;">Số thứ hai:</td>
            <td><input type="text" name="sth" disabled="disabled" value="<?php echo $second;?>"/></td>
        </tr>
        <tr>
            <td style="color:blue;">Kết quả:</td>
            <td><input type="text" name="KetQua" disabled="disabled" value="<?php echo $kq;?>"/></td>
        </tr>
        <tr>
			<td></td>
            <td><i><a href="javascript:window.history.back(-1);">Trở về trang trước</a></i></td>
        </tr>
    </table>
</body>
</html>