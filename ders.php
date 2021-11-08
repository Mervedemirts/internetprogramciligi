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

    function oran ($sayi1,$oran)
    {
        return  $sayi1+$sayi1*$oran/100;

    }
    public function __construct($sayi1,$sayi2)
    {
        $this->sayi1 = $sayi1;
        $this->sayi2 = $sayi2;
    }
}
        $hesap = new hesaplama(26, 13);
        echo $hesap->toplama(5, 9)."<br>";
        echo $hesap->cikarma(4, 2)."<br>";
        echo $hesap->carpma(4,8)."<br>";
        echo $hesap->bolme(12, 3)."<br>";
        echo $hesap->oran(100,26)."<br>";


class account 
{
    private $id;
    private $name;
    private $surname;
    private $balance;

    public function __construct($id,$name,$surname,$balance)
    {
        $this->id=$id;
        $this->name=$name;
        $this->surname=$surname;
        $this->balance=$balance;
    }
public function getid()
{
    return $this->id;
}
public function getname()
{
    return $this->name;
}
public function getsurname()
{
    return $this->surname;
}
public function getbalance()
{
    return $this->balance;
}
public function showInfo()
{
    echo "Hesap Bilgileri <br>";
    echo "Hesap id'si:{$this->id} <br>";
    echo "Hesap Adı:{$this->name} <br>";
    echo "Hesap Soyadı:{$this->surname} <br>";
    echo "Hesap Bakiyesi{$this->balance} <br>";
}
}
$hesap1 = new Account(1, "Ali", "Keskin", 6000);
$hesap1->showInfo();



?>
