<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");

if(!isset($_SESSION['user_email'])){
    header("location: index.php");
}
?>
<html lang="en">

<head>
    <title>Восстановление доступа к странице.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<style>
    body{
        overflow-x: hidden;
    }
    .main_content{
        width: 50%;
        height: 40%;
        margin: 10px auto;
        background-color: #fff;
        border: 2px solid #e6e6e6;
        padding: 40px 50px;
    }
    .header{
        border: 0px solid #000;
        margin-bottom: 5px;
    }
    #signup {
    width: 60%;
    border-radius: 30px;
    background-color: #F08080;
    border: 1px solid #F08080;
    }
    .well{
        background-color: #DC143C;
    }
    #signup{
        width: 60%;
        border-radius: 30px;
    }
</style>

<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color: white;"><strong>Ninjoalls</strong></h1></center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="main_content">
                <div class="header">
                    <h3 style="text-align: center;"><strong>Восстановление доступа к странице.</strong></h3><hr>
                </div>
                <div class="l_pass">
                    <form action="" method="POST">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="pass" placeholder="Введите новый пароль" required>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="pass1" placeholder="Введите новый пароль повторно" required>
                        </div><br>
                        <center><button id="signup" class="btn btn-info btn-lg" name="change">Изменить пароль</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
    if(isset($_POST['change'])){
        
        $user = $_SESSION['user_email'];
        $get_user = "select * from users where user_email='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row = mysqli_fetch_array($run_user);

        $user_id = $row['user_id'];

        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));

        if($pass == $pass1){
            if(strlen($pass) >= 5 && strlen($pass) <= 60){
                $update = "update users set user_pass='$pass' where user_id='$user_id'";
                $run = mysqli_query($con,$update);
                echo "<script>alert('Ваш пароль был изменён!')</script>";
                echo "<script>window.open('signin.php', '_self')</script>";
            }
            else{
                echo "<script>alert('Ваш пароль должен быть больше 5 символов')</script>";
            }
        }
            else{
                echo "<script>alert('Ваши пароли не совпадают!')</script>";
                echo "<script>window.open('change_password.php', '_self')</script>";
            }
    }
?>