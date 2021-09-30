<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực hiện phép tính</title>
	<style>
	td {
		font-weight: bold;
	}
	</style>
</head>
<body>
    <?php
        if(isset($_POST['stn']))
            $first = trim($_POST['stn']);
        else $first=0;
        if(isset($_POST['sth']))  
            $second=trim($_POST['sth']); 
        else $second=0;
    ?>
    <form action="ketquapheptinh.php" method="POST">
        <table align="center">
            <tr>
                <th colspan="5" align="center"><h3><font color="blue">PHÉP TÍNH TRÊN HAI SỐ</font></h3></th>
            </tr>
            <tr>
                <td style="color:red;">Chọn phép tính:</td>
                <td style="color:blue;"><input type="radio" name="ptinh" value="cong" />Cộng</td>
                <td style="color:blue;"><input type="radio" name="ptinh" value="tru" />Trừ</td>
                <td style="color:blue;"><input type="radio" name="ptinh" value="nhan" />Nhân</td>
                <td style="color:blue;"><input type="radio" name="ptinh" value="chia" />Chia</td>
            </tr>
            <tr></tr>
            <tr>
                <td style="color:blue;">Số thứ nhất:</td>
                <td colspan="4"><input type="number" name="stn" value="<?php echo $first;?>"/></td>
            </tr>
            <tr>
                <td style="color:blue;">Số thứ hai:</td>
                <td colspan="4"><input type="number" name="sth" value="<?php echo $second;?>"/></td>
            </tr>
            <tr>
                <td colspan = "2" align="center">
				<input type="submit" name="tinh" value="Tính"/></td>
            </tr>
        </table>
    </form>
</body>
</html>