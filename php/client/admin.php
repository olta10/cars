<?php include_once('header.php'); ?>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin: 20px auto;
    }

    th {
        background-color: #343a40; /* Bootstrap dark mode background color for header cells */
        color: #fff; /* Text color for header cells */
        font-size: 18px;
        padding: 10px;
        text-align: center;
    }

    th a {
        text-decoration: none;
        color: inherit;
    }

    th a:hover {
        text-decoration: underline;
    }

    td {
        text-align: center;
        padding: 10px;
        border: 1px solid #ddd;
    }
</style>

</head>

<body>

<?php
include_once('../server/config.php');

$getUsers = $conn->prepare("SELECT * FROM users");
$getUsers->execute();
$users = $getUsers->fetchAll();
?>

<h1 style="text-align: center; color: #343a40;">ADMIN-users</h1>

<div class="table-responsive">
    <table class="table table-dark mt-4 mb-5">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <th scope="row"><?= $user['id'] ?></th>
                <td><?= $user['name'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
                <td>
                    <a href='../server/deleteuser.php?id=<?= $user['id'] ?>'>Delete</a> |
                    <a href='../server/editusers.php?id=<?= $user['id'] ?>'>Update</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once('footer.php'); ?>
