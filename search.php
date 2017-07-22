<?php
require "../db/DatabaseOperation.php";

$key = "";

if(isset($_GET['key'])){
    $key = clean(escape($_GET['key']));
} else {
    redirect("../");
}

$res = viewAll($t_item);
foreach ($res as $row){
    //Print every item
    ?>
        <form action="./store.php">
            <button type="submit" name=store value="<?php echo $row["store_id"]?>" >
                <?php echo $row["name_desc"]." at ".$row["unit_price"]; ?>
            </button>
        </form>
    <?php
    echo "<br/>";
}

