<?php
$query = "SELECT title, id FROM songs ORDER BY id DESC";

$result = $mysqli->query($query);