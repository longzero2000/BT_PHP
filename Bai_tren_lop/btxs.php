<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
<h3 class="text-center">
<?php
echo "Kết quả xổ số ngày " . date("d/m/Y") . "<br>";
?>
</h3>
<table class="table table-bordered text-center">
	<tr>
		<td>Giải 8</td>
		<td colspan="7">
		<b class="text-danger">
		<?php
		$a=rand(0,99);
		echo $a;
		?>
		</b>
</td>
</tr>

<tr>
<td>Giải 7</td>
<td colspan="7">
<b>
<?php
$a=rand(0,999);
echo $a;
?></b>
</td>
</tr>
<tr>
<td>Giải 6</td>
<?php
for ($i=0;$i<3;$i++)
{
	$a=rand(0,9999);
	echo "<td><b>".$a."</b></td>";
}
?>
</tr>
<tr>
<td>Giải 5</td>
<td colspan="7">
<b><?php
$a=rand(0,9999);
echo $a;
?></b>
</td>
</tr>
<tr>
<td>Giải 4</td>
<?php
for ($i=0;$i<7;$i++)
{
	$a=rand(0,99999);
	echo "<td><b>".$a."</b></td>";
}
?>
</tr>
<tr>
<td>Giải 3</td>
<?php
for ($i=0;$i<2;$i++)
{
	$a=rand(0,99999);
	echo "<td><b>".$a."</b></td>";
}
?>
</tr>
<tr>
<td>Giải 2</td>
<td colspan="7">
<b><?php
$a=rand(0,99999);
echo $a;
?></b>
</td>
</tr>
<tr>
<td>Giải 1
</td>
<td colspan="7">
<b><?php
$a=rand(0,99999);
echo $a;
?></b>
</td>
</tr>
<tr>
<td>ĐB</td>
<td colspan="7">
<b><?php
$a=rand(0,999999);
echo $a;
?></b>
</td>
</tr>
</table>
</body>
</html>