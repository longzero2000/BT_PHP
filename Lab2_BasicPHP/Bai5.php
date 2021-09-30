<html>

<center>
<h2>Lưu Số Nguyên Tố Vào File</h2>
<?php
	$n=rand(-100,100);
    for ($i = 2; $i <= $n-1; $i++)
	{  
		if ($n % $i == 0)
		{  
		$value= True;  
		}  
	}  
	if (isset($value) && $value)
	{  
		echo "Số ". $n . " không phải là số nguyên tố";  
	}
	else
	{
	$snt = fopen("SoNT.txt", "a");
	fwrite($snt, $n."\n");
	echo "Số ". $n . " là số nguyên tố";
	}   
?>
</table>
</center>
</html>