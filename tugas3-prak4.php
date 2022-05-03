<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <?php
        session_start();
        $nameKosong = $nimKosong = $emailKosong = $tanggalKosong = $kelaminKosong = $hobiKosong = $deskripsiKosong = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["name"])&&!empty($_POST["nim"])&&!empty($_POST["email"])&&!empty($_POST["tanggal"])&&!empty($_POST["kelamin"])&&!empty($_POST["hobi"])&&!empty($_POST["deskripsi"])){
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['nim'] = $_POST['nim'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['tanggal'] = $_POST['tanggal'];
                $_SESSION['kelamin'] = $_POST['kelamin'];
                $_SESSION['hobi'] = $_POST['hobi'];
                $_SESSION['deskripsi'] = $_POST['deskripsi'];
                header("Location: process.php");
            }else{
                if (empty($_POST["name"])) {
                    $nameKosong = "Name is required";
                }
                if (empty($_POST["nim"])) {
                    $nimKosong = "Nim is required";
                }
                if (empty($_POST["E-Mail"])) {
                    $emailKosong = "E-Mail is required";
                }
                if (empty($_POST["Tanggal Lahir"])) {
                    $tanggalKosong = "Tanggal Lahir is required";
                }
                if (empty($_POST["Jenis Kelamin"])) {
                    $kelaminKosong = "Jenis Kelamin is required";
                }
                if (empty($_POST["Hobi"])) {
                    $hobiKosong = "Hobi is required";
                }
                if (empty($_POST["Deskripsi"])) {
                    $deskripsiKosong = "Deskripsi is required";
                }                
            }
        }
    ?>
    <form action="tugas3-prak4.php" method="post">
        <p>Nama</p>    
        <input type="text" placeholder="Name" name="name">
        <span class="error"><?php echo $nameKosong;?></span>
        <br>
        <p>Nim</p>
        <input type="text" placeholder="Nim" name="nim">
        <span class="error"><?php echo $nimKosong;?></span>
        <br>
        <p>E-mail</p>
        <input type="text" placeholder="Email" name="email">
        <span class="error"><?php echo $emailKosong;?></span>
        <br>
        <p>Tanggal Lahir</p>
        <input type="date" name="tanggal">
        <span class="error"><?php echo $tanggalKosong;?></span>
        <br>
        <p>Kelamin</p>
        <label for="laki">laki laki</label>
        <input type="radio" name="kelamin" value="laki">
        <label for="perempuan">perempuan</label>
        <input type="radio" name="kelamin" value="perempuan">
        <span class="error"><?php echo $kelaminKosong;?></span>
        <br>
        <p>Hobi</p>
        <label for="hobi 1">hobi 1</label>
        <input type="checkbox" name="hobi" value="hobi1">
        <label for="hobi 2">hobi 2</label>
        <input type="checkbox" name="hobi" value="hobi2">
        <label for="hobi 3">hobi 3</label>
        <input type="checkbox" name="hobi" value="hobi3">
        <span class="error"><?php echo $hobiKosong;?></span>
        <br>        
        <p>Deskripsi</p>
        <textarea name="deskripsi" cols="30" rows="10"></textarea> 
        <span class="error"><?php echo $deskripsiKosong;?></span>
        <br>
        <input type="submit" value="submit">               
    </form>
</body>
</html>