<?php
    $variable1=8;
    $variable2=2;
    echo "<br> First variable=";
    echo $variable1;
    echo "<br> Second variable=";
    echo $variable2;
    echo "<br>Sum =";echo $variable1+$variable2;

    // Operators

    // Arithmetic operators
    echo "<br>V1+V2 = ";
    echo $variable1+$variable2;
    echo "<br>V1-V2 = ";
    echo $variable1-$variable2;
    echo "<br>V1*V2 = ";
    echo $variable1*$variable2;
    echo "<br>V1/V2 = ";
    echo $variable1/$variable2;

    // Assignment operators
    $result=$variable1+$variable2;
    echo "<br>Assignment operator using third variable:";
    echo $result;

    //Comaprison Operators 
    echo "<br>V1>V2 = ";
    echo $variable1>$variable2;
    echo "<br>V1>=V2 = ";
    echo $variable1>=$variable2;
    echo "<br>V1< V2 = ";
    echo var_dump($variable1<$variable2);
    echo "<br>V1<=V2 = ";
    echo var_dump($variable1<=$variable2);
    echo "<br>V1==V2 = ";
    echo $variable1==$variable2;
    echo "<br>V1!=V2 = ";
    echo $variable1!=$variable2;

    // Increment $ decrement operators
    echo "<br>";
    echo $result++;
    echo "<br>";
    echo $result;
    echo "<br>";
    echo $result--;
    echo "<br>";
    echo $result;
    echo "<br>";
    echo ++$result;
    echo "<br>";
    echo $result;
    echo "<br>";
    echo --$result;
    echo "<br>";
    echo $result;

    // Logical operators
    // and(&&), or(||),xor,!
    $result=(TRUE) and (FALSE);
    echo "<br>";
    echo var_dump($result);
    $result=(TRUE) && (FALSE);
    echo "<br>";
    echo var_dump($result);
    $result=(TRUE) or (FALSE);
    echo "<br>";
    echo var_dump($result);
    $result=(TRUE) || (FALSE);
    echo "<br>";
    echo var_dump($result);
    $result=(TRUE) xor (FALSE);
    echo "<br>";
    echo var_dump($result);
    $result= !(TRUE);
    echo "<br>";
    echo var_dump($result);
?>
