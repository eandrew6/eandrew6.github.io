<?php
    /* 
    # H: Hour in 24-hour format with leading zeroes. Values 00 through 23.
    # i: Minute with leading zeroes. Values 00 through 59.
    # s: Seconds with leading zeroes. Values 00 through 59.
    */
    $time = $_REQUEST['time'];
    $time = date("H:i:s");
    echo $time;

    /*
    # l: Day as word
    # f: Month as word
    # js: Day as number
    # Y: Year as number
    */
    $date = $_REQUEST['date'];
    $date = date("l, F jS, Y");
    echo $date;

    /*
    # d: Day as 2 digits
    # m: Month as 2 digits
    # y: Year as 2 digits
    */
    $datetwo = $_REQUEST['datetwo'];
    $datetwo = date("m/d/y");
    echo $datetwo;
?>
    
