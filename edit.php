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


        <form action="" method="POST">
            <div class="form-control">
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-control">
                <label for="email">Your email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-control">
                <label for="gender">Your gender</label>
                <select name="gender" id="gender">
                    <option selected>Cohoose one</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <input type="submit" class="submit-btn" name="submit">
        </form>

    </div>
</body>

</html>

<?php

include 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO info1 (id, name, email, gender) VALUES (null, '$name', '$email', '$gender')";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header('location: index.php?msg=Added Successfully');
    } else {
        echo 'failed: ' . mysqli_errno($conn);
    }
}

?>