<?php
    /* 
    # H: Hour in 24-hour format with leading zeroes. Values 00 through 23.
    # i: Minute with leading zeroes. Values 00 through 59.
    # s: Seconds with leading zeroes. Values 00 through 59.
    */
    $time = date("H:i:s");
    echo $time;
?>