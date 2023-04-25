<?php
    //variabel $tinggi di isi angka 8. Variabel inilah yang akan menentukan tinggi piramida angka.
    $tinggi = 8;

    //dimulai Looping variabel counter $i dipakai untuk membuat tinggi piramida.Ini dimulai dari$i = 1 hingga $i <= $tinggi
    for ($i = 0; $i <= $tinggi; $i++) {

    //Looping variabel counter $j dipakai untuk membuat spasi yang akan mendorong karakter bintang ke arah kanan.Ini dimulai dari$j = 1   hingga $j <= $tinggi
    for ($j = 0; $j <= $i; $j++) {
        
    //Mencetak angka pada setiap kolom
    echo $j . " ";
 }
    // mencetak proses pindah baris
     echo "<br>";
   
 }

?>
