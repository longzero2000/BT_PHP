<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin</title>
    <style>
        td{
            background-color: #FFFFCC;
        }
    </style>
</head>
<body>
    <?php
        abstract class Nguoi{
			var $hoten;
			var $diachi;
			var $gioitinh;
			//Lay va gan gia tri cho cac thuoc tinh
			public function sethoten($hoten){
				$this->hoten=$hoten;
			}
			public function gethoten(){
				return $this->hoten;
			}
			public function setdiachi($diachi){
				$this->diachi=$diachi;
			}
			public function getdiachi(){
				return $this->diachi;
			}
			public function setgioitinh($gioitinh){
				$this->gioitinh=$gioitinh;
			}
			public function getgioitinh(){
				return $this->gioitinh;
			}
		}
		class SinhVien extends Nguoi{
			var $lophoc;
			var $nganhhoc;
			var $diem;
			//Lay va gan gia tri cho cac thuoc tinh
			public function setlophoc($lophoc){
				$this->lophoc=$lophoc;
			}
			public function getlophoc(){
				return $this->lophoc;
			}
			public function setnganhhoc($nganhhoc){
				$this->nganhhoc=$nganhhoc;
			}
			public function getnganhhoc(){
				return $this->nganhhoc;
			}
			public function setdiem($diem){
				$this->diem=$diem;
			}
			public function getdiem(){
				return $this->diem;
			}
			function diemthuong(){
				if($this->nganhhoc =="CNTT"){
					return 1;
				}
				else{
					if($this->nganhhoc =="KT"){
					return 1.5;
					}
					else{
						return 0;
					}
				}
			}
		}
		class GiangVien extends Nguoi{
			var $trinhdo;
			var $luongcoban=1500000;
			//Lay va gan gia tri cho cac thuoc tinh
			public function settrinhdo($trinhdo){
				$this->trinhdo=$trinhdo;
			}
			public function getstrinhdo(){
				return $this->trinhdo;
			}
			function luong(){
				if($this->trinhdo =="Cử Nhân"){
					return $this->luongcoban*2.34;
				}
				else{
					if($this->nganhhoc =="Tiến Sĩ"){
					return $this->luongcoban*3.67;
					}
					else{
						return $this->luongcoban*5.66;
					}
				}
			}
		}
?>
<?php
        if(isset($_POST['hoten']))
            $hoten =$_POST['hoten'];
        else $hoten ="";
        if(isset($_POST['diachi']))
            $diachi = $_POST['diachi'];
        else $diachi ="";
        if(isset($_POST['gioitinh']))
            $gioitinh = $_POST['gioitinh'];
        else $gioitinh = "";
		if(isset($_POST['nganhhoc']))
            $nganhhoc = $_POST['nganhhoc'];
		else $nganhhoc = "";
		if(isset($_POST['trinhdo']))
            $trinhdo = $_POST['trinhdo'];
        else $trinhdo = "";
		if(isset($_POST['loai']))
            $loai = $_POST['loai'];
        else $loai = "";
		$tienLuong=0;
		if(isset($_POST['loai']) && ($_POST['loai'])=='0'){
            $loai1 = new SinhVien();
            $loai1->sethoten($hoten);
            $loai1->setdiachi($diachi);
			$loai1->setgioitinh($gioitinh);
			$loai1->setnganhhoc($nganhhoc);
		}
?>
<form action="" method="post">
        <table align="center" cellpadding="2" cellspacing="2">
            <tr>
                <th colspan="4" align="center"><h3>BTN</h3></th>
            </tr>
            <tr>
                <td>Họ và tên:</td>
                <td><input type="text" name="hoten" value="<?php echo $hoten; ?>" size="40"></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diachi" value="<?php echo $diachi; ?>" size="25"></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td><input type="radio" name="gioitinh" value="1"checked <?php if($gioitinh == "1") echo "checked='checked'"?> />Nam
                    <input type="radio" name="gioitinh" value="0" <?php if($gioitinh == "0") echo "checked='checked'"?>/>Nữ
                </td>
                <td>Trình độ:
				<select name="trinhdo" id="trinhdo">
				  <option value="Cử Nhân">Cử Nhân</option>
				  <option value="Thạc Sĩ">Thạc Sĩ</option>
				  <option value="Tiến Sĩ">Tiến Sĩ</option>
				</select>
				</td>
            </tr>
            <tr>
                <td>Loại đối tượng:</td>
                <td><input type="radio" name="loai" value="0" <?php if($loai == "0") echo "checked='checked'"?>/>Sinh Viên</td>
                <td><input type="radio" name="loai" value="1" <?php if($loai == "1") echo "checked='checked'"?>/>Giảng Viên</td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" name="btnTinh" value="Hiển thị thông tin"></td>
            </tr>
            <tr>
                <td align="center">Tiền lương:</td>
                <td align="center"><input type="text" name="luong" disabled="disabled" value="<?php echo $luong; ?>" size="25"></td>
            </tr>
			<tr>
                <td align="center">Điểm thưởng:</td>
                <td align="center"><input type="text" name="diemthuong" disabled="disabled" value="<?php echo $diemthuong; ?>" size="25"></td>
            </tr>
        </table>
    </form>
		<b>Thông tin:</b>
			<p>Họ tên: <?php if(isset($_POST["hoten"])) { echo $hoten; } ?></p>
            <p>Giới tính: <?php if(isset($_POST["gioitinh"])) { echo $_POST["gioitinh"]; } ?></p>
            <p>Địa chỉ:<?php if(isset($_POST["diachi"])) { echo $_POST["diachi"]; } ?> </p>
			<p>Đối tượng:<?php if(isset($_POST["loai"])) { echo $_POST["loai"]; } ?> </p>
			<p>Trình độ:<?php if(isset($_POST["trinhdo"])) { echo $_POST["trinhdo"]; } ?> </p>
</body>
</html>