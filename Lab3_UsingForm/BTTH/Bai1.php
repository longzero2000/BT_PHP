<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Diện tích hình chữ nhật</title>
</head>
<body>
<?php
	if(isset($_POST['chieudai']))  
	    $chieudai=trim($_POST['chieudai']); 
	else $chieudai= "";
	if(isset($_POST['chieurong'])) 
	    $chieurong=trim($_POST['chieurong']); 
	else $chieurong="";
	if(isset($_POST['tinh']))
        if (is_numeric($chieudai) && is_numeric($chieurong))  
	       $dientich=$chieudai * $chieurong;
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dientich="";
            }
    else $dientich=0;
?>
<center>
<form action="" method="post">
<table border="0">
    <tr bgcolor="yellow">
    	<th colspan="2" align="center"><h3><font color="red">DIỆN TÍCH HÌNH CHỮ NHẬT</font></h3></th>
    </tr>
    <tr><td>Chiều dài:</td>
    	<td><input type="text" name="chieudai" value="<?php  echo $chieudai;?> "/></td>
    </tr>
    <tr><td>Chiều rộng:</td>
    	<td><input type="text" name="chieurong" value="<?php  echo $chieurong;?> "/></td>
    </tr>
    <tr><td>Diện tích:</td>
    	<td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
<h3> Mô phỏng hình chữ nhật</h3>
<canvas id="myCanvas" width="2500px" height="2000px">
	Trình duyệt của bạn không hỗ trợ thẻ canvas trong HTML5.
</canvas>
</center>
	<script>
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	ctx.fillStyle = "#FF0000";
	ctx.fillRect(0,0,<?php  echo $chieudai*10;?>,<?php  echo $chieurong*10;?>);
</script>

</body>
</html>