<?php

include 'database.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE info1 SET name='$name', email='$email', gender='$gender' WHERE id='$id'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header('location: index.php?msg=update Successfully');
    } else {
        echo 'failed: ' . mysqli_errno($conn);
    }
}

?>
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
        <?php
        $sql = "SELECT * FROM info1 WHERE id =$id LIMIT 1";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        ?>


        <form action="" method="POST">
            <div class="form-control">
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">
            </div>
            <div class="form-control">
                <label for="email">Your email</label>
                <input type="email" name="email" value="<?php echo $row['email'] ?>" id="email">
            </div>
            <div class="form-control">
                <label for="gender">Your gender</label>
                <select name="gender" id="gender">
                    <option selected>Cohoose one</option>
                    <option value="Male" <?php echo ($row['gender'] == 'Male') ? "selected" : ""; ?>>Male</option>
                    <option value="Female" <?php echo ($row['gender'] == 'Female') ? "selected" : ""; ?>>Female</option>
                    <option value="Others" <?php echo ($row['gender'] == 'Others') ? "selected" : ""; ?>>Others</option>
                </select>
            </div>
            <input type="submit" class="submit-btn" name="submit">
        </form>

    </div>
</body>

</html>