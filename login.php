<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Administrator</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
         .kotak-login{
             padding: 10px;
         }
         button{
             width: 100%;
         }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-sm-1"></div>
        <div class="col-lg-6 col-sm-10 mt-5">

        <div class="kotak-login">
        <center><h2 class="mt-5 mb-3">Login Administrator</h2></center>
        <form action="" method="post">
            <div class="form-group mb-3">
               <label for="username"> Username</label>
               <input class="form-control" type="text" id="username" name="username">
            </div>
            <div class="form-group mb-3">
               <label for="password">Password</label>
               <input class="form-control" type="password" id="password" name="password">
            </div>
               <center><button class="btn btn-primary mt-2" type="submit" name="login">Login</button></center>
        </form>
        </div>
    </div>
        <div class="col-lg-3 col-sm-1"></div>
    </div>
</div>
<?php
include('koneksi.php');
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
        $query = mysqli_query($konek,"SELECT * FROM user WHERE username = '$username' && password = '$password'");
    if(mysqli_num_rows($query)>0) {
        header('location:admin.php');
    }else{
        ?>
        <script>
        alert('username atau password anda salah !!!')
        </script>
        <?php
    }
}
?>
</body>
</html>