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

    public function show($skor_lumba, $skor_koala ){
        echo "================================================";
        echo "<br> Pertandingan 1 <br>";
        echo "Skor Tim Lumba-Lumba (96, 108, 89): " . $skor_lumba->getRata();
        echo "<br>";
        echo "Skor Tim Koala (89, 91, 110): " . $skor_koala->getRata();
        echo "<br>";

        echo "Hasil : ".$this->cekHasil($skor_lumba->getRata(), $skor_koala->getRata());
        echo "<br>";
    }
}

$skor_lumba1 = new TimSenam(96, 108, 89);
$skor_koala1 = new TimSenam(89, 91, 110);
$pertandingan1 = new BandingSkor();
$pertandingan1->show($skor_lumba1,$skor_koala1);

$skor_lumba2 = new TimSenam(97, 112, 101);
$skor_koala2 = new TimSenam(109, 95, 123);
$pertandingan2 = new BandingSkor();
$pertandingan2->show($skor_lumba2,$skor_koala2);

$skor_lumba3 = new TimSenam(97, 112, 101);
$skor_koala3 = new TimSenam(109, 95, 106);
$pertandingan3 = new BandingSkor();
$pertandingan3->show($skor_lumba3,$skor_koala3);

?>