<?php


function reverse(){
$output = strrev($_POST['input']);
echo $output;
}

function isUpperCase(){
    if(ctype_upper($_POST['input'])){
        echo "true";
    } else{
        echo "false";
    }
}

function isPalindrome(){
    $a = $_POST['input'];
    $b = strrev($_POST['input']);

    if($a == $b){
        echo "<br> Palindrome";
    }else{
        echo "<br>Geen palindrome";
    }
}

?>