<?php
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $gender = $_POST['gender'];
     $citys = $_POST['citys'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $number = $_POST['number'];
     


     //Database Connection
     $conn = new mysqli('localhost','root','','test0.1');
     if($conn->connect_error){
          die('Connection Failed : '.$conn->connect_error);
     }else{
          $stmt = $conn->prepare("insert into registration(firstname, lastname, gender, citys, email, password, number) 
          values(?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssssi", $firstname, $lastname, $gender, $citys, $email, $password, $number);
          $stmt->execute();
          echo "registration Successfully...";
          $stmt->close();
          $conn->close();
     }
?>
