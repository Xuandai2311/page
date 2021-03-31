<?php
session_start();
include 'db/Connection.php';
if(isset($_POST["id"])){
    
    $sqlSelectPro = "SELECT * FROM products WHERE id=".$_POST["id"];
    $result = mysqli_query($conn, $sqlSelectPro);
    $row = mysqli_fetch_row($result);

    if(!isset($_SESSION["Cart"])) {
        $cart[$id] = array(
            'name_product' =>$row[1],
            'picture' =>$row[6],
            'price' =>$row[3],
            'number' =>1
        );
     }else {

     }

     $_SESSION["Cart"] = $cart;
     echo "<prE>";
     print_r($_SESSION["Cart"]);
}
?>