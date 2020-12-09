<?php
//cek apakah tombol submit sudah tekan atau belum
if(isset($_POST["submit"]))
{//cek username & Password
    if ($_POST["username"] == "admin"
        && $_POST["password"] == "123") {
     //Cek Jika Benar, redirect ke halaman admin
     header("Location: admin.php");
     exit;
    } else
        {
            $error = true;
        }
}
// Jika salah, 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halam Login</title>
</head>
<body>
<h1> Login Admin  </h1>
<?php if(isset($error)) : ?>      
<p><i style="font-color:red;" >Username / Password Salah</i></p>
<?php endif ?>
<ul>
<form action="" method="post">
    <li>
        <label for="user" >Username : </label> 
        <input type="text" name="username" id="user" >
    </li>
    <li>
        <label for="pass" >Password : </label> 
        <input type="password" name="password" id="pass" >
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>
</body>
</html>