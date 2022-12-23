<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="page-title">
        <h1>Student Information</h1>
    </div>
    <div class="container">
        <div class="table-top">
            <div class="add-btn">
                <a href="add.php">Add</a>
            </div>
            <div class="search-area">
                <form action="search.php" method="post">
                    <input type="text" name="searchkey" placeholder="search...">
                    <input type="submit" class="submit-btn" name="submit">
                </form>
            </div>
        </div>

        <div class="table-area">
            <table>
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
                <?php
                include 'database.php';
                $sn = 1;
                $sql = "SELECT * FROM info1";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {

                ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <div class="edit-btn">
                                <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                            </div>
                            <div class="dlt-btn">
                                <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php

                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>