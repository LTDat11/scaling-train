<?php
include "db.php";

$result = $conn->query("Select * From users");
?>

<link rel="stylesheet" href="./style.css">

<h2>Create User</h2>

<br><br>

<form id="myform" action="/create.php" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="username" placeholder="Input your name">

    <br><br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Inpurt your email">

    <br><br>
    <span id="error-msg" style="color: red;"></span>

    <button type="submit">Create</button>
</form>

<h2>User List</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["email"] ?></td>
            <td>
                <a id="td_delete" href="delete.php?id=<?= $row["id"] ?>">Delete</a>
                <br><br>
                <a id="td_update" href="update.php?id=<?= $row["id"] ?>">Update</a>
            </td>
        </tr>
    <?php } ?>
</table>


<script src="./script.js"></script>