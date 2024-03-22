<?php 
class BMI{
    public $masa, $tinggi;

    public function Hitung(){
        $hasil = $this->masa/($this->tinggi*$this->tinggi);
        return number_format($hasil,2);
    }

    public function HigherBMI($orang){
        if($this->Hitung() > $orang->Hitung()){
            $markHigherBMI = true;
        }else{
            $markHigherBMI = false;
        }

        return $markHigherBMI;
    }
}

$massa_mark = 78;
$tinggi_mark = 1.69;
$massa_john = 92;
$tinggi_john = 1.95;

$mark1 = new BMI();
$mark1->masa = $massa_mark;
$mark1->tinggi = $tinggi_mark;

$john1 = new BMI();
$john1->masa = $massa_john;
$john1->tinggi = $tinggi_john;

echo "<h3>Data 1</h3>";
echo "<b>Mark</b><br>";
echo "Tinggi: ".$tinggi_mark."m<br>";
echo "massa: ".$massa_mark."kg<br>";

echo "<b>John</b><br>";
echo "Tinggi: ".$tinggi_john."m<br>";
echo "massa: ".$massa_john."kg<br>";
echo "<br>";
echo "BMI Mark : ".$mark1->Hitung();
echo "<br>";
echo "BMI John : ".$john1->Hitung();
echo "<br>";

echo "Mark memiliki BMI lebih tinggi dari John : ".($mark1->HigherBMI($john1) ? "true" : "false");
echo "<br>";
echo "================================================";
echo "<br>";

$massa_mark2 = 95;
$tinggi_mark2 = 1.88;
$massa_john2 = 85;
$tinggi_john2 = 1.76;

$mark2 = new BMI();
$mark2->masa = $massa_mark2;
$mark2->tinggi = $tinggi_mark2;

$john2 = new BMI();
$john2->masa = $massa_john2;
$john2->tinggi = $tinggi_john2;

echo "<h3>Data 2</h3>";
echo "<b>Mark</b><br>";
echo "Tinggi: ".$tinggi_mark2."m<br>";
echo "massa: ".$massa_mark2."kg<br>";

echo "<b>John</b><br>";
echo "Tinggi: ".$tinggi_john2."m<br>";
echo "massa: ".$massa_john2."kg<br>";
echo "<br>";
echo "BMI Mark : ".$mark2->Hitung();
echo "<br>";
echo "BMI John : ".$john2->Hitung();
echo "<br>";

echo "Mark memiliki BMI lebih tinggi dari John : ".($mark2->HigherBMI($john2) ? "true" : "false");
echo "<br>";
echo "================================================";
echo "<br>";
?>