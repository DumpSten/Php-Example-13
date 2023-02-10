<?php

class Uye {

    public $ad;
    public $soyad = 'çatal';
    const YAS = 24;

    public function adGoster()
    {
        return $this->ad;
    }

    public function soyadGoster()
    {
        return $this->soyad;
        //return self::YAS;
    }

    public function topla($a, $b = 5)
    {
        return $a + $b;
    }

}

$uye = new Uye;
$uye->ad = 'Çatal';
echo $uye->adGoster() . ' ' . $uye->soyadGoster();
$uye->soyad = 'ÇTL';
echo $uye->adGoster() . ' ' . $uye->soyadGoster();

//echo $uye->soyad . '<br>';
//echo Uye::YAS . '<br>';
//echo $uye->soyadGoster();

?>