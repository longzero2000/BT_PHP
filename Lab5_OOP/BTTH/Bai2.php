<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính hai phân số</title>
	<style>
	.frac {
    display: inline-block;
    position: relative;
    vertical-align: middle;
    letter-spacing: 0.001em;
    text-align: center;
	}
	.frac > span {
		display: block;
		padding: 0.1em;
	}
	.frac span.bottom {
		border-top: thin solid black;
	}
	.frac span.symbol {
		display: none;
	} 
	</style>
</head>
<body>
    <?php
        class PhanSo{
            var $tuSo;
            var $mauSo;

            public function setTuSo($tuSo){
                $this->tuSo = $tuSo;
            }
            public function getTuSo(){
                return $this->tuSo;
            }

            public function setMauSo($mauSo){
                $this->mauSo = $mauSo;
            }
            public function getMauSo(){
                return $this->mauSo;
            }

            public function PhanSo($tuSo,$mauSo){
                $this->tuSo = $tuSo;
                $this->mauSo = $mauSo;
            }

            public function rutGon(){
                $uc = UCLN($this->tuSo, $this->mauSo);
                $this->tuSo = $this->tuSo/$uc;
                $this->mauSo = $this->mauSo/$uc;
            }

            public function hienThi(){
                return "<sup>$this->tuSo</sup>&frasl;<sub>$this->mauSo</sub>";
            }

            public function Cong($ps) {
                $tu = $this->tuSo * $ps->mauSo + $ps->tuSo * $this->mauSo;
                $mau = $this->mauSo * $ps->mauSo;
                return new PhanSo($tu, $mau);
            }
            
            public function Tru($ps) {
                $tu = $this->tuSo * $ps->mauSo - $ps->tuSo * $this->mauSo;
                $mau = $this->mauSo * $ps->mauSo;
                return new PhanSo($tu, $mau);
            } 

            public function Nhan($ps) {
                return new PhanSo($this->tuSo * $ps->tuSo, $this->mauSo * $ps->mauSo);
            }

            public function Chia($ps) {
                return new PhanSo($this->tuSo * $ps->mauSo, $this->mauSo * $ps->tuSo);
            }
        }
        function UCLN($a, $b){
            if($a % $b == 0){
                return $b;
            }
            else {
                return UCLN($b, $a%$b);
            }
        }
    ?>
    <?php
        if(isset($_POST['tuso1']))
            $tuSo1 = $_POST['tuso1'];
        else $tuSo1="";
        if(isset($_POST['mauso1']))
            $mauSo1 = $_POST['mauso1'];
        else $mauSo1="";
        if(isset($_POST['tuso2']))
            $tuSo2 = $_POST['tuso2'];
        else $tuSo2="";
        if(isset($_POST['mauso2']))
            $mauSo2 = $_POST['mauso2'];
        else $mauSo2="";
        if(isset($_POST['ptinh']))
            $ptinh = $_POST['ptinh'];
        else $ptinh="";
    ?>
    <form action="Bai2.php" method="post">
        <h2><font color="blue">Chọn các phép tính trên phân số</font></h2>
        <p>Nhập phân số thứ 1: Tử số: <input type="text" name="tuso1" value="<?php echo $tuSo1; ?>">
                                Mẫu số: <input type="text" name="mauso1" value="<?php echo $mauSo1; ?>">
        </p>
        <p>Nhập phân số thứ 2: Tử số: <input type="text" name="tuso2" value="<?php echo $tuSo2; ?>">
                                Mẫu số: <input type="text" name="mauso2" value="<?php echo $mauSo2; ?>">
        </p>
        <fieldset>
            <legend>Chọn các phép tính</legend>
            <p>
                <input type="radio" name="ptinh" value="+" <?php if($ptinh == "+") echo "checked='checked'"?>/>Cộng
                <input type="radio" name="ptinh" value="-" <?php if($ptinh == "-") echo "checked='checked'"?>>Trừ
                <input type="radio" name="ptinh" value="*" <?php if($ptinh == "*") echo "checked='checked'"?>>Nhân
                <input type="radio" name="ptinh" value="/" <?php if($ptinh == "/") echo "checked='checked'"?>>Chia
            </p>
        </fieldset>
        <p><input type="submit" name="btnKQ" value="Kết quả"></p>
    </form>
    <?php
        if(isset($_POST['btnKQ'])){
            $ps1 = new PhanSo($tuSo1, $mauSo1);
            $ps2 = new PhanSo($tuSo2, $mauSo2);

            switch ($ptinh) {
                case '+':
                    $kq = $ps1->Cong($ps2);
                    break;
    
                case '-':
                    $kq = $ps1->Tru($ps2);
                    break;
                  
                case '*':
                    $kq = $ps1->Nhan($ps2);
                    break;
                  
                case '/':
                    $kq = $ps1->Chia($ps2);
                    break;
                
                default:
                    break;
            }
            $kq->rutGon();
            echo "Phép tính là: " . $ps1->hienThi() . "  $ptinh  "  . $ps2->hienThi() . " = " . $kq->hienThi();
        }
    ?>
</body>
</html>