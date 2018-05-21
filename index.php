<?php

$autor = $_POST["autor"]; // ' or 1=1

$sql = "SELECT * FROM posts WHERE autor = '$autor'";

$sql = "SELECT * FROM posts WHERE autor = '' or 1=1'";

// '; DROP TABLE posts;

$sql = "SELECT * FROM posts WHERE autor = ''; DROP TABLE posts;'";

?>