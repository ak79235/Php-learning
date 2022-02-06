<?php
    $insert=FALSE;
    if(isset($_POST['name'])){
        $server="localhost";
        $username="root";
        $password="";
        $dbname="defence_travel";
        $con= mysqli_connect($server,$username,$password,$dbname);
        if(!$con){
            die("Connection to this database failed due to".
            mysqli_connect_error());
        }
        // echo "Connection to database is successful";
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $sql = "INSERT INTO travel ( name, age, email, phone, date) VALUES ('$name', '$age', '$email', '$phone',current_timestamp());";
        // echo $sql;

        if($con->query($sql)==TRUE){
            // echo "Successfully inserted";
            $insert=TRUE;

        }
        else{
            echo "Error: $con->error ";
        }

        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="6-style.css">
</head>
<body>
    <img class="bg" src="sunrise.jpg" alt="Image Here">
    <div class="container">
        <h1>Welcome to Defence Travel Form</h1>
        <p>Enter your details to confirm your participation in the trip:</p>
        <?php
            if($insert==TRUE){
            echo "<p class='submitMSG'>Congrats!Your form has been submitted</p>";
            }
        ?>
        <form action="6-index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="number" name="age" id="age" placeholder="Enter your age">
            <input type="email" name="email" id="email" placeholder="Enter your e-mail id">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="6-index.js"></script>
</body>
</html>