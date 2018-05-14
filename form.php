<?php

$msg = "E-mail sent from Erica's 'Contact Form' site\n";
$msg .= "Sender's Name:  $_POST[name]\n";
$msg .= "Sender's E-mail:  $_POST[email]\n";
$msg .= "Sender's Occupation:  $_POST[occupation]\n";

$msg.= "\nSender's response to whether they have web site development experience: ";

    $selected=$_POST['selected'];
    if($selected){
        foreach ($selected as $s) {$msg .= "$s  ";}
    }

$msg .= "\nSender's response, after selected 'yes', to how much web site development experience they have: ";

	$selections=$_POST['selections'];
	if ($selections){
	 foreach ($selections as $ss) {$msg .=  "$ss  ";}
	}

$msg .= "\nSender's Comments & Questions:   $_POST[comments]\n";

$to = "e.r.andrews@outlook.com";
$subject = "Erica Andrews Contact Form";
$mailheaders = "From: Erica Andrews Contact Form\n";

mail($to, $subject, $msg, $mailheaders);

if (mail($to, $subject, $msg, $mailheaders)) {
   echo("<p>Email successfully sent!</p>");
  } else {
   echo("<p>Email delivery failed</p>");
  }

?>


<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
    <title>Form Processing</title>
    
    <style type="text/css">
        body
        {
            background: URL('images/water.jpg');  
            background-size: 100%;
            background-color: #eeeeee;
            font-family: monospace;
        }
        #form
        {
            margin: 0px auto;
            padding: 25px;
            border: 2px inset;
            border-radius: 30px;
            width: 700px;
            padding: 20px;
            background-color: #ffffff;
            text-align: left; 
            color: #003399;
        }
        header
        {
            font-family: monospace;
            font-size: 15pt;
            color: #ffffff;
            text-align: center;
            text-shadow: 1px 1px 2px #ffff00, 0 0 25px #ff6600, 0 0 5px #777777; 
        }
        #p
        {
            text-align: center;
            font-family: fantasy;
            color: #ffffff;
            font-size: 11pt; 
        }
        #link
        {
            text-align: center;
            font-family: fantasy;
            font-size: 10pt; 
        }
        a
        {
            color: #ff9900;
        }
        legend
        {
            text-align: center;
        }
        fieldset
        {
            color: #ff9900;
        }
        #small
        {
            font-size: 10pt;
            font-family: 'courier';
        }
        footer
        {
            text-align: center;
        }
        @media screen and (max-width: 1000px)
        {
            body{
                background-size: cover;
            }
        }
    </style>
    
</head>

<body>
     <br>
    <header><h1>Thank You</h1></header>
    <p id="p">eureka.web.dev@gmail.com</p>
           <div id="link">
            <a href="https://hills.ccsf.edu/~eandrew6/ericaandrews/ericaandrews.html">Home</a>
            </div>
          <br>
            <div id="form">
                <p><b>The following email has been sent to Erica Andrews:</b></p>
                <p>
                    <b>Your Name: </b>    
                    <?php echo "$_POST[name]"; ?>
                    <br><br>      
                    <b>Your Email: </b>
                    <?php echo "$_POST[email]"; ?>
                    <br><br>
                    <b>Your Occupation: </b>
                    <?php echo "$_POST[occupation]"; ?>
                    <br><br>
                    <b>Your Comments and Questions: </b>
                    <?php echo "$_POST[comments]"; ?>
                    <br>
                </p>
            </div>
  
</body>    
</html>
