<?php

class Manusia {
    public $nama;
    public $umur;

    public function setNama ($nama)
    {
        $this->nama = $nama;
    }

    public function setUmur ($umur)
    {
        $this->umur = $umur;
    }

    public function getInfo()
    {
        return "Nama: " . $this->nama . " , Umur: " . $this->umur;
    }

}

//Membuat Objek
$rano = new Manusia();
$rano->setNama("Rano Alamsyah");
$rano->setUmur("19");
echo $rano->getInfo();

echo "<br>";

$reno = new Manusia();
$reno->setNama("reno Alamsyah");
$reno->setUmur("19");
echo $reno->getInfo();