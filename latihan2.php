<?php
    // LOOPING   /  PENGULANGAN
    
    // type 1 = for
        /*
        for ($i=1; $i <= 10; $i++){
            echo $i . "Rifani Permata <br>";
        }
        */

    // type 2 = while
       /* $i = 1;
        while ($i <= 10) {
           echo $i . "Rifani Permata <br>";
           $i++;
        }*/

    // type 3 = foreach
    //conditional / pengkondisian
        /* 
        $angka  = 10;
        if($angka > 10){
            echo "Lebih besar dari 10";
        }else if ($angka == 10){
            echo " Sama dengan 10";
        } else{
            echo " Kurang dari 10";
        }*/

    //Tugasnya : buatkan sebuah array 1 dimensi dan lebih dari 1 dimensi 
    // tampilkan dalam bentuk pengulangan foreach
            $n = "hari <br>";
            echo $n;
        //array dan foreach
    $hari = array ('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
    foreach ($hari as $index => $nama) {
    echo ($index + 1 ) . '.'// untuk menulis penomoran pada sebuah list
    . $nama . '<br/>';
}

?>