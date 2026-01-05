<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="header">
        <div class="conteiner">
            <img class="logo" src="../public/images.jfif" alt="">
            <div class="par">
                <h1 class="text1">Hadi Supermarket</h1>
                <h2 class="text1">E-Learning system</h2>
            </div>
        </div>
    </div>
    <form class="login">
        <div class="input">
            <div>
                <label for="fname">Nama Karyawan:</label><br />
                <input type="text" id="Nama" name="fname" value="" /><br />
            </div>
            <div>
                <label for="lname">Password:</label><br />
                <input type="text" id="Password" name="lname" value="" /><br />
            </div>
            <div>
                <label for="lname">Konfirm Password:</label><br />
                <input type="text" id="Konfirmpassword" name="lname" value="" /><br />
                <input type="submit" value="Submit" />
                <window.location.href = "index.php";></window.location.href>
            </div>
        </div>
    </form>
    <script src="script.js"></script>   
</body>
</html>