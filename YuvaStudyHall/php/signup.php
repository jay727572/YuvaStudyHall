<?php

require_once '../source/db_connect.php';

if(isset($_POST['signup-btn'])) {

      $firstname = $_POST['user-fname'];
	  $lastname = $_POST['user-lname'];
      
      $password = $_POST['user-pass'];
	  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
	  $email = $_POST['user-email'];

      

    try {
      $SQLInsert = "INSERT INTO users (firstname, lastname, password, email, to_date)
                   VALUES (:firstname, :lastname, :password, :email, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':password' => $hashed_password, ':email' => $email));

      if($statement->rowCount() == 1) {
        header('location: ../index.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>