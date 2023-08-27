<?php
    date_default_timezone_set("Asia/Jakarta");
    echo $t = date("H");
    echo"<br>";
    if ($t < "10") {
        echo "Have a good morning!";
      } elseif ($t < "20") {
        echo "Have a good day!";
      } else {
        echo "Have a good night!";
      }
?>
