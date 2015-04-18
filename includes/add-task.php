<?php
 $task = strip_tags($_POST['task']);
 $data = date('Y-m-d');
 $time = date('H:i:s');

 include('connectc.php');

 $mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
 $mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");

 $query = "SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time' ";

?>