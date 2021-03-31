<?php
    include_once '../db/Connection.php';
    $success = "";
    $update  ="";
    $delete  ="";
    if(isset($_POST['add']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $picture = $_POST['picture'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $position = $_POST['position'];
        
        $sql = "INSERT INTO employee (id,name,picture,password, email,position)
        VALUES ('$id','$name','$picture','$password','$email','$position')";
        if (mysqli_query($conn, $sql)) {
            $success = "New record created successfully !";
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    elseif(isset($_POST['save']))
    {

        // $city_name  = mysqli_query($conn, "SELECT DISTINCT city_name FROM employee");
        $id = $_POST['id'];
        $name = $_POST['name'];
        $picture = $_POST['picture'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $position = $_POST['position'];
    
    
        $sql = "UPDATE employee set name= '$name', picture= '$picture', password= '$password', email= '$email', position= '$position'
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
        $sql = " DELETE FROM employee WHERE id='" . $id. "'";
        if (mysqli_query($conn, $sql))
        {
            
            
        } 
        mysqli_close($conn);

    }
        
    
?>