<?php
$conn = new mysqli(
    "127.0.0.1",
    "root",
    "123456",
    "practice_db"
);

if ($conn->connect_error) {
    die("Conection fail");
}
