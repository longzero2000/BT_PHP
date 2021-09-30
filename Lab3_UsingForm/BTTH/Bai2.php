<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANH TOÁN TIỀN ĐIỆN</title>
    <style>
        td:first-of-type {
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
	if(isset($_POST['tch']))
        $tch=trim($_POST['tch']); 
    else $tch="";
    if(isset($_POST['csc']))
        $csc=trim($_POST['csc']); 
    else $csc=0;
    if(isset($_POST['csm']))  
        $csm=trim($_POST['csm']); 
    else $csm=0;
    if(isset($_POST['dg']))
        $dg=trim($_POST['dg']); 
    else $dg=20000;
    if(isset($_POST['tinh']))
        if (is_numeric($csc) && is_numeric($csm) && $csm>$csc)
        $thanhtoan=($csm-$csc)* $dg;
        else {
                echo "<font color='red'>Giá trị không hợp lệ vui lòng nhập lại! </font>"; 
                $thanhtoan="";
            }
    else $thanhtoan=0;
    ?>
        <form align='center' action="" method="post">
        <table style="border: 1px solid black; background-color: pink;" align='center' >
        <tr bgcolor="orange">
		<th colspan="3" align="center">
		<h3><font color="brown">THANH TOÁN TIỀN ĐIỆN</font></h3>
		</th>
        </tr>
        <tr><td>Tên chủ hộ: </td>
            <td><input type="text" name="tch" value=" <?php  echo $tch;?>"/></td>
        </tr>
        <tr><td>Chỉ số cũ: </td>
            <td><input type="text" name="csc" value=" <?php  echo $csc;?>"/></td>
            <td>(Kw)</td>
        </tr>
        <tr><td>Chỉ số mới: </td>
            <td><input type="text" name="csm" value=" <?php  echo $csm;?>"/></td>
            <td>(Kw)</td>
        </tr>
        <tr><td>Đơn giá: </td>
            <td><input type="text" name="dg" value="<?php  echo $dg;?> "/></td>
            <td>(VNĐ)</td>
        </tr>
        <tr><td>Số tiền thanh toán:</td>
            <td><input type="text" name="thanhtoan" disabled="disabled" value="<?php  echo $thanhtoan;?> "/></td>
            <td>(VNĐ)</td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;"><input type="submit" value="Tính" name="tinh" /></td>
        </tr>
        </table>
        </form>
</body>
</html>