 <!DOCTYPE html>
 <html>

 <head>
     <title>Ninjoalls login and signup</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <meta http-equiv="X-UA-Compatible" content="ie=edge">
 </head>

 <style>
body {
    overflow-x: hidden;
}

#signup {
    width: 60%;
    border-radius: 30px;
    background-color: #F08080;
    border: 1px solid #F08080;
}

#login {
    width: 60%;
    background-color: #fff;
    border: 1px solid #F08080;
    color: #F08080;
    border-radius: 30px;
}

#login:hover {
    width: 60%;
    background-color: #fff;
    border: 2px solid #F08080;
    color: #F08080;
    border-radius: 30px;
}

.well {
    background-color: #DC143C;
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
         <div class="col-sm-6" style="left:0.5%;">
             <img src="images/ninjoalls.jpeg" class="img-rounded" title="Ninjoalls" width="500px" height="440px">
         </div>
         <div class="col-sm-6" style="left:8%:">
             
             <h2><strong>Узнайте, что сейчас происходит<br>в мире и общайтесь с друзьями</strong></h2><br><br>
             <h4><strong>Присоединяйтесь к Ninjoalls прямо сейчас.</strong></h4>
             <form method="post" action="">
                 <button id="signup" class="btn btn-info btn-lg" name="signup">Регистрация</button><br><br>
                 <?php
                    if (isset($_POST['signup'])) {
                        echo "<script>window.open('signup.php','_self')</script>";
                    }
                 ?>
                 <button id="login" class="btn btn-info btn-lg" name="login">Авторизация</button><br><br>
                 <?php
                    if (isset($_POST['login'])) {
                        echo "<script>window.open('signin.php','_self')</script>";
                    }
                 ?>

         </div>
     </div>


 </body>

 </html>