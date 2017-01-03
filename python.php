<html>
<head>
<title>Flood Results</title>
</head>
<body>
<?php

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
	

// Printing additional info
 $pin;$basename;$captcha;
        if(isset($_POST['pin'])){
          $pin=$_POST['pin'];
        }if(isset($_POST['username'])){
          $basename=$_POST['username'];
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LcBgRAUAAAAANtmZtMKc2triYLJWj_ckmJ3Ch3M";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>Captch failed</h2>';
        } else {
         	echo '
	</pre>
	<hr />Last line of the output: ' . $last_line . '
	<hr />Return value: ' . $retval;
echo nl2br (" \n Posted values: \n Name: $basename \n PIN: $pin <hr />
");;
$last_line = system('sudo python3 /root/kahoot-hack/flood.py "'.$basename.'" "'.$pin.'" 1000', $retval);
        }

?>
<p>You will be redirected in <span id='counter'>15</span> second(s).</p>
<script type="text/javascript" src="assets/js/countdown.js"></script>
</body>
</html>
