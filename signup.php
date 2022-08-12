<!DOCTYPE html>
<html lang="en">

<head>
    <title>Регистрация</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    #signup{
        width: 60%;
        border-radius: 30px;
        background-color: #F08080;
        border: 1px solid #F08080;
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
                    <h3 style="text-align: center;"><strong>Присоединитесь к Ninjoalls</strong></h3>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Имя" name="first_name"
                                required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Фамилия" name="last_name"
                                required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" placeholder="Email" name="u_email"
                                required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" placeholder="Пароль"
                                name="u_pass" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password1" type="password" class="form-control" placeholder="Подтвердите пароль"
                                name="u_pass1" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                            <select class="form-control" name="u_country" required="required">
                                <option disabled>Выберите вашу страну</option>
                                <option>Беларусь</option>
                                <option>Россия</option>
                                <option>Украина</option>
                                <option>США</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                            <select class="form-control input-md" name="u_gender" required="required">
                                <option disabled>Выберите ваш пол</option>
                                <option>Мужской</option>
                                <option>Женский</option>
                                <option>Другой</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input type="date" class="form-control input-md" placeholder="Email" name="u_birthday"
                                required="required">
                        </div><br>
                        <a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip"
                            title="Signin" href="signin.php">Уже есть аккаунт?</a><br><br>
                        <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Зарегистрироваться</button></center>
                        <?php include("insert_user.php");?>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>