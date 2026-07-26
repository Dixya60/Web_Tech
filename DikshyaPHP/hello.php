<?php

//echo "hello"
//variables in php
/* $name = "John Nash";
   $full_name = " John Nash";
   echo "hello " .$fullname; */

   if(empty($_POST["n1"]) | empty($_POST["n2"]))
    {
        header("Location:form.php");
    }

    $number1 = $_POST["n1"];
    $number2 = $_POST["n1"];

    $result = $number1 + $number2 ;

    echo "Addition of two numbers $number1 and $number2 = " .$result;
?>

