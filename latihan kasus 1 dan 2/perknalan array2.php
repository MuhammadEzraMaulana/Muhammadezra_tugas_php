<?php

    $array = array(
        array(
            'nama' => 'Muhammad ezra',
        ),
        array(
            'nama' => 'bayu',
        ),
        array(
            'nama' => 'saep',
        
        ),
        array(
            'nama' => 'sukaemi',
        ),

        array(
            'nama' => 'amel',
        
        ),
        array(
            'nama' => 'putri',
        ),
    );

    foreach ($array as $key => $value){
        echo "Nama : ".$value['nama'];
        echo "<br>";
    }
?>