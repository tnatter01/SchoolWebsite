<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 19-10-2018
 * Time: 10:48:02
 */

function servicekosten($betalingswijze){
    switch ($betalingswijze){
        case "Visa":
            return 10;
            break;
        case "Mastercard":
            return 12;
            break;
        case "PayPal":
            return 14;
            break;
        case "Ideal":
            return 16;
            break;
    }
}

function bestelRules($genre, $aantal){
    $rules = array(
        "Klassiek"=>array("min"=>3,"max"=>7),
        "World"=>array("min"=>3,"max"=>7),
        "Latin"=>array("min"=>3,"max"=>7),
        "Rock"=>array("min"=>3,"max"=>7),
        "R&B"=>array("min"=>3,"max"=>7),
        "Pop"=>array("min"=>3,"max"=>7),
    );

        if($rules[$genre]["min"] <= $aantal && $aantal <=$rules[$genre]["max"]){
            return true;
        }else{
            return false;
        }
}

function overzicht(){
    for($x=0, $x <sizeof($_POST["albumcode"]); $x++;){
    }
}