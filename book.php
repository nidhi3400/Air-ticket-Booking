<!DOCTYPE Html>
<html>
    <head>
        <title>Passenger details.</title>
        <style>
        .container
        {
            padding: 10px;
            background-color: white;
        }
        input[type=text],
        input[type=number]
        {
            width: 100%;
            padding: 12px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=text]:focus,
        input[type=number]:focus
        {
            background-color: #ddd;
            outline: none;
        }
        .btn
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
        .btn:hover
        {
            opacity: 1.0;
        }
        h2
        {
            text-align: center;
        }
        </style>
    </head>
    <body>
        <form  action="book.php" method="POST">
            <div class="container">
            <h2><b>Passenger Details</b></h2>
            <hr>
            <label><b>First Name</b></label>
            <input type="text" placeholder="Enter your first name" name="first" required>
            <label><b>Last Name</b></label>
            <input type="text" placeholder="Enter your last name" name="last" required>
            <label><b>Email-id</b></label>
            <input type="text" placeholder="Enter your email-id" name="email" required>
            <label><b>Gender</b></label>
            <input type="text" placeholder="Your gender" name="gender" required>
            <label><b>Age</b></label>
            <input type="number" placeholder="Your age" name="age" required>
            <label><b>Contact-number</b></label>
            <input type="text" placeholder="Your contact number" name="contact" required>
            <hr>
            <p><b>No. of passengers:---------</b></p>
            <label><b>1.  No. of adults</b></label>
            <input type="number" placeholder="Enter no. of adults" name="adult" required>
            <label><b>2.  No. of children</b></label>
            <input type="number" placeholder="Enter no. of children" name="children" required>
            <hr>
            <input type="submit" value="Book Ticket" name="book" class="btn" formaction="booked.php">
            </div>
        </form>
    </body>
</html>