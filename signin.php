<!DOCTYPE html>
<html lang="en">

<head>
    <title>Авторизация</title>
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

    .main-content{
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

    .well {
        background-color: #DC143C;
    }

    #signin{
        width: 60%;
        border-radius: 30px;
        background-color: #F08080;
        border: 1px solid #F08080;
    }

    .overlap-text{
        position: relative;
    }

    .overlap-text a{
        position: absolute;
        top: 8px;
        right: 10px;
        font-size: 14px;
        text-decoration: none;
        font-family: 'Overpass Mono', monospace;
        letter-spacing: -1px;
    }
</style>

<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div>
                    <center>
                        <h1 style="color: white;">Ninjoalls</h1>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center;"><strong>Авторизация</strong></h3>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email" required="requiered"
                            class="form-control input-md"><br>
                        <div class="overlap-text">
                            <input type="password" name="pass" placeholder="Пароль" required="requiered"
                                class="form-control input-md"><br>
                            <a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip"
                                title="Reset Password" href="forgot_password.php">Забыли пароль?</a>
                        </div>
                        <a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip"
                            title="Create Account!" href="signup.php">Нету аккаунта?</a><br><br>
                        <center><button id="signin" class="btn btn-info btn-lg" name="login">Авторизоваться</button></center>

                        <?php include("login.php"); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>