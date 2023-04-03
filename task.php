<?php

class Persegi
{
    public function area(int$sisi)
    {
        return $sisi*$sisi;
    }

    public function circumfrence(int$sisi)
    {
        return 4*$sisi;
    }

    public function enlarge($enlarge,int$sisi)
    {
        return $enlarge*$sisi;
    }

    public function shrink( int$sisi, int$shrink) 
    {
        return $sisi%$shrink ;
    }
}


class Lingkaran
{
    public function area(int$jari)
    {
        return 3.14*$jari;
    }

    public function circumfrence(int$jari)
    {
        return 2*3.14*$jari;
    }

    public function enlarge($enlarge,int$jari )
    {
        return $enlarge*$jari;
    }

    public function shrink( int$jari, int$shrink) 
    {
        return $jari%$shrink ;
    }
}

class persegiPanjang
{
    public function area(int$panjang, int$lebar)
    {
        return $panjang*$lebar;
    }

    public function circumfrence(int$panjang, int$lebar)
    {
        return 2*($panjang + $lebar);
    }

    public function enlarge(int$enlarge, int$panjang, int $lebar) 
    {
        return $enlarge* ($panjang*$lebar) ;
    }

    public function shrink(int$panjang, int $lebar, int$shrink) 
    {
        return ($panjang*$lebar)% $shrink ;
    }
}

//class Descriptor
//{
//    public float $bangundatar;
//    public function __construct(  float $bangunDatar)
//    {
//        $this->bangunDatar= $bangundatar;
//    }
//}
$persegi=new Persegi();
$lingkaran=new Lingkaran();
$persegiPanjang= New persegiPanjang();
//$descriptor= new Descriptor("Bangun Datar ini adalah lingkaran/persegi/persegi panjang yang memiliki luas dan keliling");
//echo ',,,';
echo $lingkaran ->area(20) ,',,,,';;
//echo '/n';
echo $persegiPanjang->area(20,20);
//echo $persegi ->circumfrence(20);
//echo ',,,';
//echo $lingkaran ->circumfrence(20);
//echo ',,,';
//echo $persegiPanjang ->circumfrence(20,20);
//echo $descriptor;