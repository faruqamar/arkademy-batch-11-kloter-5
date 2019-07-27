<?php
    function count_vowel($kalimat){
        $kata = strtolower($kalimat);
        $pisah = str_split($kata);
        $count = 0;
        for($i=0;$i<sizeof($pisah);$i++){
            if($pisah[$i]== "a" || $pisah[$i]== "e" || $pisah[$i]== "i" || $pisah[$i]== "o" || $pisah[$i]== "u"){
                $count++;
            }
        }

        echo $count;
    }

    echo "hitung huruf vokal kata : nama saya adalah <br>";
    count_vowel("nama saya adalah");
?>