<?php include "getall.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h2>Create User</h2>
    <form id="myform" action="/create.php" method="POST">
        <div class="container-input">
            <label for="name">Name</label>
            <input type="text" name="name" id="username" placeholder="Input your name">
        </div>

        <div class="container-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Inpurt your email">
        </div>

        <div class="container-input">
            <button class="btn-create" type="submit">Create</button>
            <span class="error-msg" style="color: red;"></span>
        </div>

    </form>

    <h2>User List</h2>
    <div class="mytable">
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
                    <td class="action-cell">
                        <a class="action_delete" href="delete.php?id=<?= $row["id"] ?>">Delete</a>
                        <a class="action_update" href="edit.php?id=<?= $row["id"] ?>">Update</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="./script.js"></script>
</body>

</html>