<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Diện Tích Hình Tròn</title>
    <style type="text/css">
        body {  
            background-color: #d24dff;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
           color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>

<?php
if(isset($_POST['bankinh']))  
    $bankinh=trim($_POST['bankinh']); 
else $bankinh=0;
if(isset($_POST['tinh']))
        if (is_numeric($bankinh))  
            $dientich=$bankinh * $bankinh *3.14;
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dientich="";
            }
else $dientich=0;
?>
<center>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>Diện Tích Hình Tròn</h3></th>
    </thead>
    <tr><td>Bán kính:</td>
     <td><input type="text" name="bankinh" value="<?php  echo $bankinh;?> "/></td>
    </tr>
    <tr><td>Diện tích:</td>
    <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
<canvas id="myCanvas" width="1000px" height="1000px">
</center>
</body>
<script>
function Circle(x, y, radius){
   this.x = x;
   this.y = y;
   this.radius = radius;
}
function createCircle(){
    var ctx = document.getElementById("myCanvas").getContext("2d");
    var circle= new Circle(200, 200, <?php  echo $bankinh;?>);
    ctx.beginPath();
    ctx.arc(circle.x, circle.y, circle.radius, 0, 2 * Math.PI);
    ctx.fill();
}
createCircle();
</script>
</html>