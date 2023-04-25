<?php
    // variabel $tinggi di isi angka 9. Variabel inilah yang akan menentukan tinggi piramida bintang.
    $tinggi = 9;

    //dimulai dari Looping variabel counter $i dipakai untuk membuat tinggi piramida.Ini dimulai dari$i = 1 hingga $i >=
    for ($i =1 ; $i<=10; $i++) {

    //Looping variabel counter $j dipakai untuk membuat spasi yang akan mendorong karakter bintang ke arah kanan. Ini dimulai dari$j = 10 hingga $j>$i
    for ($j = 10; $j>$i; $j-=1) {
      
    // Mencetak bintang pada setiap kolom
    echo "*";
 }
    // mencetak proses pindah baris
     echo "<br>";
 }

?>
