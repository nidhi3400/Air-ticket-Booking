<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Register</title>
        <style>
        body
        {
            font-family: Arial,Helvetica,sans-serif;
            background-color: black;
        }
        *{
            box-sizing: border-box;
        }
        .container
        {
            padding: 10px;
            background-color: white;
        }
        input[type=text],
        input[type=password]
        {
            width: 100%;
            padding: 12px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=text]:focus,
        input[type=password]:focus
        {
            background-color: #ddd;
            outline: none;
        }
        hr
        {
            border: 1px solid #320;
            margin-bottom: 25px;
        }
        .registerbtn
        {
            background-color: #008080;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            width: 200px;
            opacity: 0.5;
            margin-left: 550px;
            border-radius: 12px;
        }
        .registerbtn:hover
        {
            opacity: 1.0;
        }
        a
        {
            color: dodgerblue;
        }
        .login
        {
            background-color: #f1f1f1;
            text-align: center;
        }
        h1
        {
            text-align: center;
            font-size: 250%;
        }
        p
        {
            text-align: center;
        }
        </style>
    </head>
    <body>
        <form method="post" action="register.php">
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="user" required>
                <label><b>Email</b></label>
                <input type="text" placeholder="Enter your email" name="email" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="psw" required>
                <hr>
                <input type="submit" value="Register" name="register" class="registerbtn" formaction="db_register.php">
            </div>
            <div class="container login">
                <p>Already have an account?<a href="login.php">Login</a>.</p>
            </div>
        </form>
    </body>
</html>



