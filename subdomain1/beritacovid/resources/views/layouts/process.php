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
    <link rel="stylesheet" href="styleForm.css">
    <title>Document</title>
</head>
<body>
      <div class="row">
        <div class="col-md-12">
            <form action="tugas3-prak4.php" method="post">
                <h1> Data mu </h1>
                <fieldset>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name?>">

                <label for="email">Email:</label>
                <input type="email" id="mail" name="email" value="<?php echo $nim?>">

                <label for="nim">Nim:</label>
                <input type="text" id="nim" name="nim" value="<?php echo $nim?>">

                <label for="nim">Tanggal Lahir:</label>
                <input type="date" id="tanggal" name="tanggal" value="<?php echo $tanggal?>">
                <label for="Kelamin">Kelamin:</label>          
                <input type="text" id="kelamin" name="kelamin" value="<?php echo $kelamin?>">

                <label>Hobi:</label>
                <input type="text" id="hobi" name="hobi" value="<?php echo $hobi?>">         

                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi"><?php echo $deskripsi?></textarea><br>

                </fieldset>

                <a href="tugas3-prak4.php"><input class="button" placeholder="back" type="button"></a>
                
            </form>
        </div>
      </div>    
</body>
</html>