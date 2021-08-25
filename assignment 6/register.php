<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .sectionheight{
            height:100vh;
        }
        
        h1{
            text-align: center;
            color: violet;
            padding-top: 20px;
        }
        body{
            background-image: url('3.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
       
        form{
            text-align: center;
        }
        a{
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
            padding-right: 50px;
        }
    </style>
</head>
<body>
    <section class="sectionheight">
        <p><a href="login.html">Login Form</a>  <a href="register.html">Registration Form</a></p>
        <h1>REGISTRATION FORM</h1>
        <form action="registerprocess.php" method="POST">
            <div>
                <label1 for="">Name:</label1>
                <br>
                <input type="text" name="name" />
            </div>
            <br>
            <div>
                <label1 for="">Contact:</label1>
                <br>
                <input type="number" name="contact" />
            </div>
            <br>
            <div>
                <label1 for="">Email:</label1>
                <br>
                <input type="email" name="email" />
            </div>
            <br>
            <div>
                <label1 for="">Address:</label1>
                <br>
                <input type="text" name="address" />
            </div>
            <br>
            <div>
                <label1 for="">Password:</label1>
                <br>
                <input type="password" name="password" />
            </div>
            <br>
            <button type="submit">Submit Now</button>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>