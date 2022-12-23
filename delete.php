<?php

include 'database.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM info1 WHERE id = $id";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header('location : index.php?msg=deleted');
    } else {
        echo "failed: " . mysqli_error($conn);
    }
}
