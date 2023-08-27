<?php

    $x=10;
    echo"nilai x di fungsi :$x<br>";

    //mendeklarasi fungsi
    function F1(){
        global $x;
        $x=7;
        echo"$x<br>";
    }
    F1(); //memanggil fungsi
    echo"nilai x di fungsi :$x<br>";

    echo"<hr>";
    
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }          
       
      myTest();
      myTest();
      myTest();
?>