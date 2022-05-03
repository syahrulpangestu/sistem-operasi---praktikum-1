<?php
session_start();
$name = $_SESSION['name'];
$nim = $_SESSION['nim'];
$email = $_SESSION['email'];
$tanggal = $_SESSION['tanggal'];
$kelamin = $_SESSION['kelamin'];
$hobi = $_SESSION['hobi'];
$deskripsi = $_SESSION['deskripsi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name;?></h1>
    <h1><?php echo $nim;?></h1>
    <h1><?php echo $name;?></h1>
    <h1><?php echo $email;?></h1>
    <h1><?php echo $tanggal;?></h1>
    <h1><?php echo $kelamin;?></h1>
    <h1><?php echo $hobi;?></h1>
    <h1><?php echo $deskripsi;?></h1>
    <a href="tugas3-prak4.php">balik gan</a>
</body>
</html>