<?php
include "db.php";

$id = $_POST["id"];
$name = $_POST["editName"];
$email = $_POST["email"];

$safeid = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
$safename = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safemail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

$stmt = $conn->prepare(
    "UPDATE users
    SET name=?, email=?
    WHERE id=?"
);

$stmt->bind_param("ssi", $safename, $safemail, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Update succes";
} else {
    echo "Update error";
}

$stmt->close();


header("Location:index.php");
