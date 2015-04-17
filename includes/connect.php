<?php
//mysqli is localhost, root, tasks 
//it takes localhost as the first perameter
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
//mysqli we want it to die and have this message
if ($mysqli->connect_error) {
	die('Connect Error(' . $mysqli->connect_errno . ')'
		. $mysqli->connect_error);
}
else {
	echo "Connection made";
}
$mysqli->close();

?>