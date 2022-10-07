<?php
    $watashi = "Hallo nama saya Laely Dwiyana Putri, siswi SMKN 1 Krawang";
    echo $watashi;
    echo "<br/>";
    //echo strlen($watashi);
    echo strlen($watashi);
    echo "<br/>";
    // akan menampilkan panjang variabel
    echo str_word_count($watashi);
    echo "<br/>";
    //Mengitung jumlah kata dalam string
    echo strrev($watashi);
    echo "<br/>";
    //Membalikkan string
    echo strpos($watashi, "Laely");
    echo "<br/>";
    //strpos untuk mengakses suatu karakter atau kumpulan karakter tertentu pada string
    echo str_replace("Laely Dwiyana Putri", "Bayu", $watashi);
    echo "<br/>";
    //Mengganti beberapa karakter dalam string
?>