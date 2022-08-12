<?php
include("includes/connection.php");

    if(isset($_POST['sign_up'])){
        $first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
        $last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
        $pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
        $pass1 = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass1']));
        $email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
        $country = htmlentities(mysqli_real_escape_string($con,$_POST['u_country']));
        $gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
        $birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
        $status = "verifired";
        $posts = "no";
        $newgid = sprintf('%05d', rand(0,999999));

        $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
        $check_username_query = "select user_name from user where user_email = '$email'";
        $run_username = mysqli_query($con, $check_username_query);

        if(strlen($pass) < 5){
            echo"<script>alert('Пароль должен быть не менее 5 символов!')</script>";
            exit();
        }
        if($pass != $pass1){
            echo"<script>alert('Пароли не совпадают!')</script>";
            exit();
        }
        $check_email = "select * from users where user_email='$email'";
        $run_email = mysqli_query($con,$check_email);

        $check = mysqli_num_rows($run_email);

        if($check == 1){
            echo"<script>alert('Аккаунт с такой эл. почтой уже существует, попробуйте использовать другую электронную почту')</script>";
            echo"<script>window.open('signup.php','_self')</script>";
            exit();
        }

        $profile_pic = "header_red.png";

        $insert = "insert into users (f_name,l_name,user_name,describe_user,relationship,
        user_pass,user_email,user_country,user_gender,user_birthday,user_image,user_cover,user_reg_date,
        status,posts,recovery_account)
         values('$first_name', '$last_name', '$username', 'Hello Ninjoalls. This is my default status!','...','$pass',
          '$email', '$country', '$gender', '$birthday', '$profile_pic', 'default_cover.jpg', NOW(), '$status',
           '$posts', 'Iwanttoputadingintheuniverce.')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('Отлично $first_name, можете продолжить!')</script>";
            echo"<script>window.open('signin.php','_self')</script>";
        }
        else{
            echo"<script>alert('Регистрация не удалась, пожалуйста, попробуйте еще раз!')</script>";
            echo"<script>window.open('signup.php','_self')</script>";
        }
    }
?>