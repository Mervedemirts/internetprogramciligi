<?php 
    class hesaplama {
        private $sayi1
        private $sayi2
    function toplama ( $sayi1, $sayi2)
    {
        return $sayi1 + $sayi2;
    }
    function cikarma ( $sayi1, $sayi2)
    {
        return $sayi1 - $sayi2
    }
    function carpma ( $sayi1, $sayi2)
    {
        return $sayi1 * $sayi2
    }
    function bölme ( $sayi1, $sayi2)
    {
        return $sayi1 / $sayi2
    }

        $hesap = new hesaplama (26, 13)
        echo $hesap->toplama(5, 9);
        echo $hesap->cikarma(4, 2);
        echo $hesap->carpma(4,8);
        echo $hesap->bolme(12, 3);





    }



?>