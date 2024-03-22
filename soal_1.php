<?php
class TimSenam {
    private $skor = [];

    public function __construct($n1, $n2, $n3) {
        $this->skor = [$n1, $n2, $n3];
    }

    public function getRata() {
        $total = array_sum($this->skor);
        $rata = $total / count($this->skor);
        return number_format($rata,2);
    }
}

class BandingSkor {
    public function cekHasil($skor_lumba, $skor_koala){
       if($skor_lumba >= 100 || $skor_koala >= 100){
        if($skor_lumba > $skor_koala){
            $hasil = "Lumba-Lumba Menang, mendapat trofi";
        }elseif($skor_lumba < $skor_koala){
            $hasil = "Tim Koala Menang, mendapat trofi";
        }
        else{
            $hasil = "Hasil Seri";
        }
       }else{
        $hasil = "Tidak ada yang mendapat trofi";
       }
       return $hasil;
    }
}
echo "================================================";
echo "<br> Pertandingan 1 <br>";
$skor_lumba1 = new TimSenam(96, 108, 89);
$skor_koala1 = new TimSenam(89, 91, 110);

echo "Skor Tim Lumba-Lumba (96, 108, 89): " . $skor_lumba1->getRata();
echo "<br>";
echo "Skor Tim Koala (89, 91, 110): " . $skor_koala1->getRata();
echo "<br>";

$pertandingan1 = new BandingSkor();
echo "Hasil : ".$pertandingan1->cekHasil($skor_lumba1->getRata(), $skor_koala1->getRata());
echo "<br>";
echo "================================================";
echo "<br> Pertandingan 2 <br>";

$skor_lumba2 = new TimSenam(97, 112, 101);
$skor_koala2 = new TimSenam(109, 95, 123);

echo "Skor Tim Lumba-Lumba (97, 112, 101): " . $skor_lumba2->getRata();
echo "<br>";
echo "Skor Tim Koala (109, 95, 123): " . $skor_koala2->getRata();
echo "<br>";

$pertandingan2 = new BandingSkor();
echo "Hasil : ".$pertandingan2->cekHasil($skor_lumba2->getRata(), $skor_koala2->getRata());
echo "<br>";
echo "================================================";
echo "<br> Pertandingan 3 <br>";

$skor_lumba3 = new TimSenam(97, 112, 101);
$skor_koala3 = new TimSenam(109, 95, 106);

echo "Skor Tim Lumba-Lumba (97, 112, 101): " . $skor_lumba3->getRata();
echo "<br>";
echo "Skor Tim Koala (109, 95, 106): " . $skor_koala3->getRata();
echo "<br>";

$pertandingan3 = new BandingSkor();
echo "Hasil : ".$pertandingan3->cekHasil($skor_lumba3->getRata(), $skor_koala3->getRata());
echo "<br>";
echo "================================================";
echo "<br>";

?>