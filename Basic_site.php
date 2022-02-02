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
    <p><br> status:</p>
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
            echo "<br>";
            echo $numbers[0];
            echo "<br>";
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
</body>
</html>