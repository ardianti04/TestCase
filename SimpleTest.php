<?php

//mengimpor TestCase dari kerangka pengujian PHPUnit.
use PHPUnit\Framework\TestCase;

//mengimpor file WordCount.php
require_once "WordCount.php";

class SimpleTest extends TestCase{
    public function testCountWords(){

        // Membuat instance dari kelas WordCount dengan $Wc = new WordCount
        $Wc=new WordCount();

        //Menentukan kalimat yang akan diuji,
        $TestSentenxe="My name is Ardianti";

        //Memanggil metode countWords pada instance $Wc 
        //dengan $TestSentenxe sebagai argumen untuk menghitung jumlah kata dalam kalimat.
        $WordCount=$Wc-> countWords($TestSentenxe);

        //Menggunakan asserstion PHPUnit dengan $this->assertEquals(4, $WordCount); untuk memastikan
        // bahwa hasil penghitungan kata sesuai dengan yang diharapkan (yaitu, ada 4 kata dalam kalimat tersebut).
        $this->assertEquals(4,$WordCount);
    }
}