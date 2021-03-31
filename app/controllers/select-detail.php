<?php
    // Check if user has requested to get detail
    if (isset($_POST["get_data"]))
    {
        // Get the ID of customer user has selected
        $id = $_POST["id"];
 
        // Connecting with database
        $connection = mysqli_connect("localhost", "root", "", "ban-hang");
 
        // Getting specific customer's detail
        $sql = "SELECT * FROM product WHERE id='$id'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_object($result);
 
        // Important to echo the record in JSON format
        echo json_encode($row);
 
        // Important to stop further executing the script on AJAX by following line
        exit();
    }
?>