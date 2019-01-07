<!DOCTYPE Html>
<html>
    <head>
        <title>Ticket</title>
        <style>
            table, th, td 
            {
                border: 2px solid black;
                border-collapse: collapse;
                font-size: 15px;
            }
            th,td
            {
                padding: 10px;
            }
            .printbtn
            {
                background-color: #008080;
                color: white;
                padding: 12px 20px;
                border: none;
                cursor: pointer;
                width: 200px;
                opacity: 0.7;
                margin-left: 550px;
                margin-top: 50px;
                border-radius: 12px;
            }
            .printbtn:hover
            {
                opacity: 1.0;
            }
            h1
            {
                text-align: center;
                color: #008080;
                font-size: 50px;
                margin-top: 20px;
            }
            h2
            {
                text-align: center;
                color: #008080;
                font-size: 30px;
                margin-top: 20px;
            }
            #small
            {
                width: 200px;
            }
        </style>
    </head>
    
        <?php
        session_start();
        global $first,$last,$email,$gender,$age,$adult,$children,$total,$contact;
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $adult = $_POST['adult'];
        $children = $_POST['children'];
        $total = $adult + $children;
        $contact = $_POST['contact'];
        $output = array();
        $type=$_SESSION['type'];
        $source=$_SESSION['source'];
        $destination=$_SESSION['dest'];
        $depart=$_SESSION['depart'];
        $return=$_SESSION['return'];
        ?>
        <h1>Indian Airways.</h1>
        <h2>Flight Ticket</h2>
        <table style="width:50%" align="center">
                <tr>
                    <td id="small"><strong>First name:</strong></td>
                    <td><?php echo $first ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Last name:</strong></td>
                    <td><?php echo $last ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Email-id:</strong></td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Gender:</strong></td>
                    <td><?php echo $gender ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Age:</strong></td>
                    <td><?php echo $age ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Contact No.:</strong></td>
                    <td><?php echo $contact ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>No.of adults:</strong></td>
                    <td><?php echo $adult ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>No. of children:</strong></td>
                    <td><?php echo $children ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Type of journey:</strong></td>
                    <td><?php echo $type ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>From:</strong></td>
                    <td><?php echo $source ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>To:</strong></td>
                    <td><?php echo $destination ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Departure date:</strong></td>
                    <td><?php echo $depart ?></td>
                </tr>
                <tr>
                    <td id="small"><strong>Return date:</strong></td>
                    <td><?php if($type == 'round_trip')
                                echo $return;
                            else
                                echo "NA"
                        ?></td>
                </tr>
            </table>
        </div>
        <form>
            <input type="submit" value="Print Ticket" name="print" class="printbtn" formaction="final.html">
        </form>
</html>
