<?php
    // variabel $tinggi di isi angka 9. Variabel inilah yang akan menentukan tinggi piramida bintang.
    $tinggi = 9;

    //dimulai dari Looping variabel counter $i dipakai untuk membuat tinggi piramida.Ini dimulai dari$i = 1 $tinggi hingga $i >=
    for ($i = $tinggi; $i >= 1; $i--) {

    //Looping variabel counter $j dipakai untuk membuat spasi yang akan mendorong karakter bintang ke arah kanan. Ini dimulai dari$i = 1 $tinggi hingga $i >=
    for ($j = $i; $j >= 1; $j--) {
      
    // Mencetak bintang pada setiap kolom
    echo "*";
 }
    // mencetak proses pindah baris
     echo "<br>";
 }

?>