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
    //
    echo strrev($watashi);
    echo "<br/>";
    //
    echo strpos($watashi, "Laely");
    echo "<br/>";
    //
    echo str_replace("Laely Dwiyana Putri", "Bayu", $watashi);
    echo "<br/>";
    //
?>