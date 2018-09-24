<?php
/**
 * Created by PhpStorm.
 * User: snehi
 * Date: 21-09-2018
 * Time: 21:36
 */
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);




?>