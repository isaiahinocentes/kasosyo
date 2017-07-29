<?php
require "Connection.php";
//Create
/**
 * Insert a value to a table to corres columns and vals
 * @param $table
 * TABLE or VIEW name
 * @param $cols
 * indexed array of string that contains the column names of the table
 * [0]"col1" [1]"col2" ...
 * @param $vals
 * indexed array of values to be added
 * [0]val1 [1] val2 ...
 */
function create($table, $cols, $vals){
    //Format array of colums to "(col1, col2, ...)"
    $cols = format_colnames($cols);
    //Format the array to (val1, val2, ...)
    $vals = format_colnames($vals);
    $sql = "INSERT INTO $table $cols VALUES $vals";
    $res = query($sql);
    confirm($res);
}

//Read All
function viewAll($table){
    $sql = "SELECT * FROM $table";
    $res = query($sql);
    confirm($res);
    if(count_rows($res) > 0){
        $row = fetch_array($res);
        //Echo each item here
        return $res;
    }else{
        redirect('../index.php');
    }
}

//Read Unit
function view($table, $condition){
    //$cols = format_colnames($cols);
    //$sql = "SELECT $cols FROM $table WHERE $condition";
    $sql = "SELECT * FROM $table WHERE $condition";
    //echo $sql."<br/>";
    $res = query($sql);
    confirm($res);
    if(count_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        return $res;
    }else{
        redirect('../index.php');
    }
}

//Login
function login($table, $uname, $pass){
    $sql = "SELECT * FROM $table WHERE 
      user_id = $uname AND 
      pass = $pass";
    echo "SQL: ".$sql."<br/>";
    $res = query($sql);
    confirm($res);
    if(count_rows($res) > 0){
        return true;
    } else {
        return false;
    }
}

//Update
function update($table, $cols, $vals, $condition){
    $cols = format_colnames($cols);
    $sql = "UPDATE $table SET $cols WHERE $condition";
    $res = query($sql);
    confirm($res);
}

//Delete

//FORMAT string array
/** Format string array to (x1, x2, x3, x4, ...)
 * @param $cols
 * [0]"c" [1]"d" [2]"a"
 * @return string
 * (x1, x2, x3, x4, ...)
 */
function format_colnames($cols){
    $n_cols = "(";
    for ($i = 0; $i < sizeof($cols); $i++){
        //format columns
        //column_name = cloumn_value, column_name = cloumn_value
        $n_cols .= $cols[$i];
        if($i != sizeof($cols)-1){
            $n_cols .= ", ";
        }
    }
    $n_cols  .= ")"; //By this part, this should be (col1, col2, col3)
    return $n_cols;
}