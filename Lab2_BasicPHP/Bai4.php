<html>
<?php
$n=rand(2,5);
$m=rand(2,5);
?>
<center>
<h2>Ma Trận <?php echo $n." x ".$m;?></h2>
<table border="1px">

<?php
for($i = 1; $i <= $n; $i ++) {
    echo "<tr>";
    for($j = 1; $j <= $m; $j ++) {
        echo "<td>".rand(10,100)."</td>";
    }
    echo "</tr>";
}
?>

</table>
</center>
</html>