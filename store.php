<?php
require "../db/DatabaseOperation.php";
$store = "";
echo "Store ID: ".$_GET['store']."<br/>";
if(isset($_GET['store'])){
    $store = clean(escape($_GET['store']));
} else {
    redirect("../");
}

//Get store info
$res = view($t_store, "id = '$store'");
foreach ($res as $row){
    foreach ($row as $col) {
        echo $col." ";
    }
    echo "<br/>";
    echo "Success!";
}