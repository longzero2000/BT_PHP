<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Kiểm Tra - Nguyễn Văn Hải Long - 60136035</title>
</head>
<body>
    <?php
    if (isset($_POST["ma_loai"])&&isset($_POST["ma_sach"])&&isset($_POST["ten_sach"])&&isset($_POST["tentg_sach"])&&isset($_POST["namxb"])&&isset($_POST["namxb"]))
    {
        $ma_loai = $_POST["ma_loai"];
		$ma_sach = $_POST["ma_sach"];
        $ten_sach = $_POST["ten_sach"];
		$tentg_sach = $_POST["tentg_sach"];
		$namxb = $_POST["namxb"];
		$nxb = $_POST["nxb"];
        $mang_sach = explode("---",trim($_POST["mang_sach"]));
        $n = count($mang_sach);
        $mang_sach[$n] = array(
		array($ma_loai,$ma_sach,$ten_sach,$tentg_sach,$namxb,$nxb)
		);
        $kq = "Thêm thành công $ten_sach!"; 
    }
    else{
        $ma_loai ="";
        $kho_sach ="";
		$ma_sach = "";
        $ten_sach = "";
		$tentg_sach = "";
		$namxb = "";
		$nxb = "";
        $kq ="";
    }
     ?>
<form action="BKT.PHP" method ="post">
        <table >     
        <tr bgcolor="gray">
            <td colspan="4" align="center"><h3><font color="white">Bảng thêm sách</font></h3></td>
        </tr>
        <tr>
            <td colspan="2" style="color: red;font-weight: bold" >Chọn mã loại sách: </td>
            <td >
				<input type="radio" name="ma_loai" value="0" <?php if($ma_loai == "") echo "checked='checked'"?>/>Không có
                <input type="radio" name="ma_loai" value="1"checked <?php if($ma_loai == "M01") echo "checked='checked'"?> />Văn Học
				<input type="radio" name="ma_loai" value="2"checked <?php if($ma_loai == "M02") echo "checked='checked'"?> />Tin Học
                
            </td>
		</tr>
		<tr>
			<td colspan="2" style="color: red;font-weight: bold" >Mã sách: </td>
            <td >
                <input type="text" size="40" name="ma_sach" value="<?php echo $ma_sach?>">
            </td>
		</tr>
		<tr>
			<td colspan="2" style="color: red;font-weight: bold" >Tên sách: </td>
            <td >
                <input type="text" size="40" name="ten_sach" value="<?php echo $ten_sach?>">
            </td>
		</tr>
		<tr>
			<td colspan="2" style="color: red;font-weight: bold" >Tên tác giả chính: </td>
            <td >
                <input type="text" size="40" name="tentg_sach" value="<?php echo $tentg_sach?>">
            </td>
		</tr>
		<tr>
			<td colspan="2" style="color: red;font-weight: bold" >Năm xuất bản: </td>
            <td >
                <input type="text" size="40" name="namxb" value="<?php echo $namxb?>">
            </td>
		</tr>
		<tr>
			<td colspan="2" style="color: red;font-weight: bold" >Nhà xuất bản: </td>
            <td >
                <input type="text" size="40" name="nxb" value="<?php echo $nxb?>">
            </td>
		</tr>
		<tr>
            <td>
                <input type="submit" value="Thêm Sách" name="submit" />
            </td> 
        </tr>
        <tr>
            <td colspan="3" style="color: red;font-weight: bold" >Kho sách đang có: </td>
            <td><?php echo $kq ?></td>
        </tr>   
        <tr>
            <td colspan="2"></td>
            <td >
            <textarea name="mang_sach" rows="5" cols="40" placeholder="" readonly=""><?php echo $mang_sach; ?></textarea>
            </td>
        </tr>
        </form>
</body>
</html>