<?php

//kelas WordCount yang memiliki satu metode countWords.
// Metode ini mengambil satu argumen, yaitu kalimat, dan mengembalikan jumlah kata dalam kalimat tersebut.
class WordCount{
    public function countWords($sentence){
        // Fungsi ini menghitung jumlah kata dalam sebuah kalimat.
        // Pertama, kalimat dipecah menjadi kata-kata menggunakan spasi sebagai pemisah,
        // dan kemudian jumlah kata dihitung menggunakan fungsi count.
        return count(explode(" ",$sentence));
    }
}