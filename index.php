<!DOCTYPE html> <!--this declaration defines this document to be html5-->
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>AIR BOOKING SYSTEM.</title>
    <style>
            body
            {
                font-family: Arial,Helvetica,sans-serif;
                margin: 0;
                
            }
            /*styling header*/
            .header
            {
                padding: 5px;
                text-align: center;
                background: black;
                opacity: 0.7;
                color: white;
            }
            .navbar
            {
                overflow: auto;
                background-color: black;
                opacity: 0.9;
                font-size: 25px;
            }
            .navbar a/*for nav bar links*/
            {
                float: left;/*to make the buttons stay side-by-side*/
                color: white;
                text-align: center;
                padding: 15px 20px;
                text-decoration: none;
            }
            .navbar a.right
            {
                float: right;
            }
            .navbar a:hover /*for color change on hover*/
            {
                background-color: #ddd;
                color: black;
            }
            .mySlides 
            {
                display:block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 30px;
                width: 50%;
                opacity: 0.5;
            }
            .mySlides:hover
            {
                opacity: 1.0;
            }
            h2
            {
                margin-top: 100px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Welcome to Indian Airways!!</h1>
        </div>
        <div class="navbar">
            <a href="msg.html">Flights</a>
            <a href="aboutus.html">About Us</a>
            <a href="login.php" class="right">Login</a>
            <a href="register.php" class="right">Register</a>
        </div>
        <div>
        <a href="http://ashwinnaik.com/blog/history-of-airlines-in-india/"><img class="mySlides" src="1.jpg"></a>
        <a href="http://ashwinnaik.com/blog/history-of-airlines-in-india/"><img class="mySlides" src="2.jpg"></a>
        <a href="http://ashwinnaik.com/blog/history-of-airlines-in-india/"><img class="mySlides" src="3.jpg"></a>
        <a href="https://www.cheapflights.com/news/10-things-to-do-before-your-flight"><img class="mySlides" src="4.jpg"></a>
        <a href="https://www.zomato.com"><img class="mySlides" src="5.jpg"></a>
        <a href="https://www.zomato.com"><img class="mySlides" src="6.jpg"></a>
        <h2>Click on the slideshowing images to go to related sites.</h2>
        </div>
    
    <script>
    var myIndex = 0;
    show();

    function show() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(show, 3000); 
    }
    </script>

    </body>
</html>
