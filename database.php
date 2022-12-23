<?php
$conn = mysqli_connect('localhost', 'root', '', 'final');

if (!$conn) {
    die('connection failed' . mysqli_connect_error());
}
// else {
//     echo 'successfull';
// }
// $sql1 = "INSERT INTO info1(id, name, email, gender) VALUES (null, 'Rafi Bin Wores', 'rafi@gmail.com', 'Male')";
// $sql2 = "INSERT INTO info1(id, name, email, gender) VALUES (null,'Sondip Roy', 'sondip@gmail.com', 'Male')";
// $sql3 = "INSERT INTO info1(id, name, email, gender) VALUES (null,'Saima Akter', 'saima@gmail.com', 'Female')";
// $sql4 = "INSERT INTO info1(id, name, email, gender) VALUES (null,'Eshan', 'eshan@gmail.com', 'Others')";
// $sql5 = "INSERT INTO info1(id, name, email, gender) VALUES (null,'Tuhin', 'tuhin@gmail.com', 'Male')";

// $res1 = mysqli_query($conn, $sql1);
// $res2 = mysqli_query($conn, $sql2);
// $res3 = mysqli_query($conn, $sql3);
// $res4 = mysqli_query($conn, $sql4);
// $res5 = mysqli_query($conn, $sql5);
