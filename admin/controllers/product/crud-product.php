<?php
    include_once '../db/Connection.php';
    $success = "";
    $update  ="";
    $delete  ="";
    if(isset($_POST['add']))
    {
        $id = $_POST['id'];
        $name = $_POST['name_product'];
        $discount = $_POST['discount'];
        $price = $_POST['price'];
        $picture = $_POST['picture'];
        $description = $_POST['description'];
        $sql = "INSERT INTO products (id,name_product,discount, price,picture,description)
        VALUES ('$id','$name','$discount','$price','$picture','$description')";
        if (mysqli_query($conn, $sql)) {
            $success = "New record created successfully !";
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    else if(isset($_POST['save']))
    {

        // $city_name  = mysqli_query($conn, "SELECT DISTINCT city_name FROM employee");
        $id = $_POST['id'];
        $name = $_POST['name_product'];
        $discount = $_POST['discount'];
        $price = $_POST['price'];
        $picture = $_POST['picture'];
        $description = $_POST['description'];
    
    
        $sql = "UPDATE products set name_product= '$name', discount= '$discount', price= '$price', picture= '$picture', description = '$description'
        WHERE id= $id ";
        if (mysqli_query($conn, $sql)) {
            $update = "Update has been successfully.!";
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }

        
        mysqli_close($conn);
        
    }

    else 
    {
        $id=$_GET['id'];
        $sql = "DELETE FROM products WHERE id='" . $id. "'";
        if (mysqli_query($conn, $sql))
        {
            
            
        }
        mysqli_close($conn);

    }
        
    
?>