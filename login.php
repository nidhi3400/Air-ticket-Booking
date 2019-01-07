
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>login page</title>
        <style>
            body
            {
                font-family: Arial;
                background-color: black;
            }
            *{
                box-sizing: border-box;
            }
            .container
            {
                padding: 20px;
                background-color: white;
            }
            input[type=text],input[type=password]
            {
                width: 100%;
                padding: 20px;
                margin: 5px 0 30px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }
            input[type=text]:focus,input[type=password]:focus
            {
                background-color: #ddd;
                outine: none;
            }
            hr
            {
                border: 1px solid #320;
                margin-bottom: 25px;
            }
            .loginbtn
            {
                background-color: #008080;
                color: white;
                padding: 10px 0;
                margin: auto;
                border: none;
                cursor: pointer;
                width: 200px;
                opacity: 0.5;
                font-size: 16px;
                border-radius: 12px;
                margin-left: 575px;
            }
            .loginbtn:hover
            {
                opacity: 1;
            }
            a
            {
                color: dodgerblue;
            }
            .psw_change
            {
                background-color: #f1f1f1;
                text-align: center;
            }
            h1
            {
                text-align: center;
                font-size: 250%;
            }
            .change
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form method="post" action="login.php">
            <div class="container">
                <h1>Login</h1>
                <hr>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="user" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="psw" required>
                <hr>
                <input type="submit" name="login" value="Login" class="loginbtn" formaction="db_login.php">
            </div>
            <div class="container change">
            <p>Not yet a member?<a href="register.php">Register</a>.</p>
            </div>
        </form>
    </body>
</html>

