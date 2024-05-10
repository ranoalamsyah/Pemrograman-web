<?php

$host = 'localhost';
$username =  'root';
$password = '';
$database ='crud_db';

$koneksi = new mysqli($host, $username, $password, $database);

if($koneksi->connect_error){
    die( "connection failed: " . $conn->connection_error);
}

?>