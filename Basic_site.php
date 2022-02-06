<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* background-color: bisque; */
        }
        .container{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
            text-align: center;
        }
        .if{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
        .arrays{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
        .loops{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
        .AIL{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
        .do-while{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
        .for{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
        .for-each{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
        .h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 >Let's learn about PHP</h1>
    </div>
    <div class="if">
    <p><br><b> Status:</b></p>
        <?php
            $age=19;
            if($age>18){
                echo "You can go to the party";
            }
            else{
                echo "You can not go to the party";
            }
        ?>
    </div>
    <div class="arrays">
        <h3>Arrays in PHP</h3>
        <?php
            $numbers=array(6,7,8,9,10);
            echo "<br>0th element of array:";
            echo $numbers[0];
            echo "<br>No of elements in array:";
            echo count($numbers);
        ?>
    </div>
    <div class="loops">
        <h3>Loops in PHP</h3>
        <?php
            $a=0;
            while ($a <= 10) {
                echo "<br>The value of a is:";
                echo $a;
                $a++;
            }
        ?>
    </div>
    <div class="AIL">
        <h3>Iterating arrays with the help of loops</h3>
        <?php
            $a=0;
            while($a<count($numbers)){
                echo "<br>Value of array at [";
                echo $a;
                echo "] is : ";
                echo $numbers[$a];
                $a++;
            }
        ?>
    </div>
    <div class="do-while">
        <h3>Example of itereating loops using do-while</h3>
        <?php
            $a=0;
            do{
                echo "<br>Value of a is:";
                echo $a;
                $a++;
            }while($a<=10);
        ?>
    </div>
    <div class="for">
        <h3>Example of itereating loops using for loop</h3>
        <?php
            for ($a=0; $a < 10 ; $a++) { 
                echo "<br>Value of a is:";
                echo $a;
            }
        ?>
    </div>
    <div class="for-each">
        <h3>Example of itereating loops using for-each</h3>
        <?php
            $languages=array("Python","Java","CPP");
            foreach ($languages as  $value) {
                echo "<br>Printing array with for-each loop:";
                echo $value;
            }
        ?>
    </div>
</body>
</html>