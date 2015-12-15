<?php
$page =  ($_GET['page']);
$end  = ($page - 2) * 5;
$query = "SELECT * FROM songs ORDER BY id DESC LIMIT ".$end .  ", 5";

$result = $mysqli->query($query);



?>