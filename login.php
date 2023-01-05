<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login</title>

    <link href="bootstrap-5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        max-width: 330px;
        padding: 15px;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }

    </style>
</head>
 <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
        <form method="post">
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Login</button>

        </form>
    </main>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    session_start();
    
    include "koneksi.php";

    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
    $cek = mysqli_query($conn, $sql);

    if(mysqli_num_rows($cek) > 0){
        $d = mysqli_fetch_object($cek);
        $_SESSION['sukses'] = true;
        echo '<script>window.location="index.php"</script>';  
    }else{
        echo '<script> alert("username atau kata sandi salah!")</script>';
        
    }
}
?>