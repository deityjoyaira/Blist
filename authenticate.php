<?php
    ob_start();
    $connection = mysqli_connect('localhost', 'root', '', 'capstone');
    
    $Email = $_POST['Email'];  
    $Password = $_POST['Password'];  
      
      
        $sql = "select *from users where Email = '$Email' and Password = '$Password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           if(!isset($_SESSION['Email'])){
            ob_start();
            header('Location:user-dashboard.php');
           }
        /*ADMIN LOGIN*/   
        if($Password == 'admin' && $Email == 'deity.admin@gmail.com'){
            header('Location:admin-dashboard.php');
           }
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>"; 
  
        }     
?>  
