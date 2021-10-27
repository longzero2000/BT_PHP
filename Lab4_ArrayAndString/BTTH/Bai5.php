<?php
$SP = array();
  $SP[0] = array("A001","Sữa tắm XMEN","Chai 50ml", "50");
  $SP[1] = array("A002","Dầu gội lifeboy","Chai 50ml", "20");
  $SP[2] = array("B001","Dầu ăn Cái Lân","Chai 1 lít", "10");
  $SP[3] = array("B002","Đường cát","Kg", "15");
  $SP[4] = array("C001","Chén sứ Minh Long","Bộ 10 cái", "2");
?>
<style>
#dt {
    font-weight: bold;
	color:red;
}
</style>
<center>
    <h2>Danh mục hàng hoá</h2>
	<form method='POST'>
	<table>
       <h3>Mã mặt hàng: </h3>
	   <input type="text" name="ma">
	   <h3>Tên mặt hàng: </h3>
	   <input type="text" name="ten">
	   <h3>Đơn vị tính: </h3>
	   <input type="text" name="loai">
	   <h3>Số lượng: </h3>
	   <input type="number" name="sl"><br>
       <input type="submit" value="Nhập">
	  </table>
     </form>
       <?php
		$no= $_POST['ma'];
		$name=$_POST['ten'];
		$type=$_POST['loai'];
		$sl=$_POST['sl'];
		$SP[5] = array($no,$name,$type,$sl);
		echo "<font color='green'>Chúc mừng đã nhập mặt hàng $name thành công!</font>";  
		?>
	<table border='1'>
	<tr id="dt">
		<td>Mã mặt hàng</td>
		<td>Tên mặt hàng</td>
		<td>Đơn vị tính</td>
		<td>Số lượng</td>
	</tr>
	<?php
	
	foreach ($SP as $each){

		echo "<tr>";
		foreach ($each as $accesories){
			echo "<td>" . $accesories . "</td>";
		}
		echo "</tr>";

	}
	?>
	</table>
	</br>

</center>