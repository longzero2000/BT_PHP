<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        td{
                text-align:center;
                width: 100px;
                height: 30px;
            }
        h3 {
            text-align:center;
            font-size: 25px;
            margin-top:10px;
        }
        table{
            background-color: gray;
        }
</style>
<body>
    <?php
        if (isset($_POST["tinhtong"]))
        {
            $tong = 0;
            $ds = $_POST["ds"];
            $arr = explode(",", $ds);
            $n = count($arr);
            for ($i = 0; $i < $n; $i++)
            {
                $tong = $tong + $arr[$i];   
            }
        } 
        else
        {
            $ds = "";
            $tong = "";
        }     
    ?>
    <form action="Bai2.php" method ="post">
    <center>
	<table>
    <tr bgcolor="aqua">
        <td colspan="4" align="center"><h3>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h3></td> 
    </tr>
    
    <tr>
        <td colspan="2">Nhập dãy số:</td>
        <td >
            <input type="text" id="ds" size="40" name="ds" value="<?php echo $ds; ?>">
        </td>
        <td style="color: red;">(*)</td>
    </tr>
    <tr id="submit">  
        <td colspan="4" ><input type="submit" value="Tổng Dãy Số" name="tinhtong" /></td>   
    </tr>
    <tr>
        <td colspan="2">Tổng dãy số</td>
        <td >
            <input type="text " id="tong" size="40" name="tong" value="<?php echo $tong;?>">
        </td>
    </tr>
    <tr>
    <td colspan="4">
        <p><font color="red">(*)</font> Các số được nhập cách nhau bằng dấu ","</p>
    </td> 
    </tr>
    </table>
	</center>
    </form>
</body>
</html>