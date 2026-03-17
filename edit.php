<?php
include "getwithid.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT INFO</title>
</head>

<body>

    <h2>Edit info</h2>

    <form id="myform" action="/update.php" method="post">
        <input type="hidden" name="id" value="<?= $user["id"] ?>">
        <label for="editName">Edit Name</label>
        <input type="text" name="editName" id="username" value="<?= $user["name"] ?>">
        <br><br>
        <label for="email">Edit Email</label>
        <input type="email" name="email" id="email" value="<?= $user["email"] ?>">

        <br><br>
        <span id="error-msg" style="color: red;"></span>
        <button type="submit">Update</button>
    </form>

</body>

</html>