<?php
require "../db/DatabaseOperation.php";
if(login($t_acc, $_GET["uname"],$_GET["pass"])){
    session_start();
    $_SESSION["user_id"] = $_GET["uname"];
} else {
    header("../");
}

