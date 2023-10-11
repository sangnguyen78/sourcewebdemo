<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'MySqlLibrary.php';

$getProducts = new Mysql();
$getProducts->dbConnect();
$query = mysqli_query($getProducts->dbConnect(), "SELECT * FROM demo");

while ($row = mysqli_fetch_array($query)) {
    echo $pid = $row["product_id"];
    echo '<pre>';
    echo $pid = $row["product_name"];
    echo '<pre>';
    echo $pid = $row["catelog"];
}
