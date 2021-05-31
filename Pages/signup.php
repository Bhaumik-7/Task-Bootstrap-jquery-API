<?php
    $connection = mysql_connect("localhost", "root", ""); 
    $db = mysql_select_db("sign", $connection); 
    $name=$_POST['name']; 
    $email=$_POST['email'];
    $password= ($_POST['password'];
    $cpassword= $_POST['cpassword'];
    // Check if e-mail  is valid or not
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid Email.......";
    }else{
        $query = mysql_query("insert into registration(name, email, password, cpassword) values ('$name', '$email', '$password', '$cpassword')"); 
        if($query){
            echo "You have Successfully Registered.....";
            header("location: login.html");
        }else   
        {
            echo "Error....!!";
            header("location: signup.html")
        }
        }else{
            echo "This email is already registered, Please try another email...";
        }
    }
    mysql_close ($connection);
?>