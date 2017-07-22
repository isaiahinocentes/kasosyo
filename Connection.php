<?php
/**
 * Created by PhpStorm.
 * User: Isaiah
 * Date: 7/22/2017
 * Time: 5:13 PM
 */
$username = "root";
$password = "";
$dbname = "kasyoso";
$con = mysqli_connect('localhost',$username,$password,$dbname);

function escape($string){
    //remove special characters
    global $con;
    return mysqli_real_escape_string($con,$string);
}

function clean($string){
    //remove html entities form string
    return htmlentities($string);
}

function redirect($string){
    //redirect to new page
    return header("Location: $string");
}

function query($string){
    //perform query
    global $con;
    return mysqli_query($con,$string);
}

function multi_query($string){
    global $con;
    return mysqli_multi_query($con,$string);
}

function count_rows($result){
    //count result from query
    return mysqli_num_rows($result);
}

function confirm($result){
    // check if query is successful
    global $con;
    if(!$result){
        die("Query failed with error: ".mysqli_error($con));
    }else{
        return true;
    }
}

function fetch_array($result){
    //return array result from query
    return mysqli_fetch_array($result);
}

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
