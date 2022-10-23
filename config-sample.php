<?php

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Birth_Date = $_POST['Birth_Date'];
    $Email = $_POST['Email'];
    $Contact_Number = $_POST['Contact_Number'];
    $Address = $_POST['Address'];
    $Password = $_POST['Password'];


    $connection = new mysqli ('localhost', 'root', '', 'capstone');
    

    if ($connection -> connect_error){
        die ('CONNECTION FAILED' .$connection->connect_error );
    } else {
        $stmt = $connection->prepare("insert into user (First_Name, Last_Name,Birth_Date, Email, Contact_Number, Address, Password)
        values (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssisiss", $First_Name, $Last_Name, $Birth_Date,$Email, $Contact_Number, $Address, $Password);
        $stmt->execute();
        echo '<script>alert("Registration Sucessful! Thank you for your registration!")</script>';
        $stmt->close();
        $connection->close();
    }


?>

