<html>
<head>
<title>Flood Results</title>
</head>
<body>
<?php

$basename = $_POST["username"];
$pin = $_POST["pin"];

	echo '<pre>';
// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
	$last_line = system('sudo python3 /root/kahoot-hack/flood.py "'.$basename.'" "'.$pin.'" 1000', $retval);

// Printing additional info
	echo '
	</pre>
	<hr />Last line of the output: ' . $last_line . '
	<hr />Return value: ' . $retval;
echo nl2br (" \n Posted values: \n Name: $basename \n PIN: $pin <hr />
");


?>
<p>You will be redirected in <span id='counter'>15</span> second(s).</p>
<script type="text/javascript" src="assets/js/countdown.js"></script>
</body>
</html>