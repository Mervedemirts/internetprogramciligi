<?php 
    class hesaplama {
        private $sayi1;
        private $sayi2;
    function toplama ( $sayi1, $sayi2)
    {
        return $sayi1 + $sayi2;
    }
    function cikarma ( $sayi1, $sayi2)
    {
        return $sayi1 - $sayi2;
    }
    function carpma ( $sayi1, $sayi2)
    {
        return $sayi1 * $sayi2;
    }
    function bolme ( $sayi1, $sayi2)
    {
        return $sayi1 / $sayi2;
    }
}
        $hesap = new hesaplama(26, 13);
        echo $hesap->toplama(5, 9)."<br>";
        echo $hesap->cikarma(4, 2)."<br>";
        echo $hesap->carpma(4,8)."<br>";
        echo $hesap->bolme(12, 3)."<br>";





    



?>