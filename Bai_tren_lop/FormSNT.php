<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Số Nguyên Tố</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form class="form-horizontal" method="post">  
 <label class="control-label" for="email">Nhập số:</label>
 <input class="form-control" type="text" name="input"><br><br>  
<input class="btn btn-default" type="submit" name="submit" value="Kiểm tra">  
</form>  
<?php  
if($_POST)  
{  
    $input=$_POST['input'];
	if (10>$input or $input>1000)
	echo "Vui lòng nhập lại!";
	else
	{
		for ($i = 2; $i <= $input-1; $i++)
		{  
		if ($input % $i == 0) {  
		$value= true;  
		}
	}
		if (isset($value) && $value)
		{  
		echo 'Số '. $input . ' không phải số nguyên tố';  
		}  
		else
		{  
		echo 'Số '. $input . ' là số nguyên tố';  
		}   
	}  
}

?>
</div>
</body>
</html>