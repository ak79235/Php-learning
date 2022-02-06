<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* background-color: bisque; */
        }
        .Container{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
            text-align: center;
        }
        .Functions,.strings,.concat,.NoW,.reverse{
            max-width:80%;
            background-color: antiquewhite;
            margin: auto;
            padding: 25px;
        }
    </style>
</head>
<body>
    <div class="Container">
        <h3>Using and Understanding Functions & Strings</h3>
    </div>
    <div class="Functions">
    <h3>Using Function</h3>
    <?php
        function print_num($num){
            echo "<br>Your number is :";
            echo $num;
        }
        print_num(25);
        ?>
    </div>
    <div class="strings">
        <h3>Examlple of string and string length</h3>
        <?php
            $str="My name is Prometheus";
            $len=strlen($str);
            echo $str;
            echo "<br>Length of the above string is:";
            echo $len;
        ?>
    </div>
    <div class="concat">
        <h3>Concatenation of strings</h3>
        <?php
            $str="My name is Prometheus";
            $len=strlen($str);
            echo $str;
            echo "<br>Length of the above string is:".$len;
        ?>
    </div>
    <div class="NoW">
        <h3>No of words in a string</h3>
        <?php
            $str="This is an example to count the no of words in this string";
            echo $str;
            echo "<br>No of words in the above string is: ".str_word_count($str);
        ?>
    </div>
    <div class="reverse">
        <h3>Reverse of a string</h3>
        <?php
            $str="This is an example to reverse this string";
            echo $str;
            echo "<br>Reverse of the above string is: ".strrev($str);
            echo "<br>Position of 'example' in the above string is: ".strpos($str,"example");
            echo "<br>Replacing a word in the string: <br>".str_replace("example","ex.",$str);
        ?>
    </div>
</body>
</html>