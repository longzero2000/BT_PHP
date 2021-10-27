<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <?php     
        if(isset($_POST['n']))
            $n = $_POST['n'];
        else $n = 0;    
        $_arr = [];
            for($i = 0; $i < $n;$i++){
                $_arr[$i] = rand(-100,100);
            }
        //câu a :
        $abc = implode(" ",$_arr);
        //câu b:
        $sapxep = $_arr;
        asort($sapxep);
		//câu c:
		$c=rand(-100,100);
		$o=rand(0,$n);
			array_splice($_arr, $o,0,$c);
		$them = implode(" ",$_arr);
		//câu d:
		$sapxep2=$_arr;
		for($i = 0; $i < $n;$i++){
                if ($i<=$o)
				{
					sort($sapxep2);
				}
				else
				{
					rsort($sapxep2);
				}
            }
    ?>
    <pre>
    <form action="" method="POST">
        <table border="0" cellpadding="0" align='center'>
        <tr bgcolor="yellow">
            <th colspan="3" align="center"><h3><font color="red">MẢNG VÀ CHUỖI</font></h3></th>
        </tr>
        <tr>
            <td>Nhập n:</td>
            <td><input type="text" name="n" size= "30" value="<?php  echo $n;?>"/></td>
        </tr>
        <tr>
             <td colspan="3" style="text-align: center;"><input type="submit" size="20" value=" Mảng phát sinh "/></td>
        </tr>
        <tr>
            <td>Mảng:</td>
            <td><input type="text" name="abc" size= "70" disabled="disabled" value="<?php  echo $abc;?> "/></td>
        </tr>
        <tr>
            <td>Sắp xếp:</td>
            <td><input type="text" name="sapxep" size= "70" disabled="disabled" value="<?php  echo implode(" ", $sapxep);?> "/></td>
        </tr>
        <tr>
            <td><?php echo"Thêm ".$c." vào vị trí số ".($o+1)." của mảng:"?></td>
            <td><input type="text" name="diem100" size= "70" disabled="disabled" value="<?php  echo $them;?> "/></td>
        </tr>
        <tr>
            <td>Sắp xếp mảng mới thêm:</td>
            <td><input type="text" name="tongam" size= "70" disabled="disabled" value="<?php  echo implode(" ", $sapxep2);?> "/></td>
        </tr>
        </table>
    </form>
    </pre>
</body>
</html>