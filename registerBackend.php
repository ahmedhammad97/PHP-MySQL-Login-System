<?php

    //Connection to DB
    $connection = new mysqli("localhost", "root", "", "LoginForm");

    //Check connection
    if ($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
        return;
    }

    //Table creation
    $sql = "CREATE TABLE IF NOT EXISTS User (
      user_id INT(6) UNSIGNED PRIMARY KEY,
      email VARCHAR(50) UNIQUE,
      username VARCHAR(30) NOT NULL UNIQUE,
      password VARCHAR(50) NOT NULL,
      registeration_date TIMESTAMP,
      last_login_date TIMESTAMP
    )";
    if ($connection->query($sql) !== TRUE) {
        echo "Table creation failed .. " . $connection->error;
        return;
    }


    //Client Request
    if(isset($_POST["username"])){
      //Sent Data
      $userID = $_POST["userId"];
      $email = $_POST["email"];
      $username = $_POST["username"];
      $password = md5($_POST["password"]);

      //Insertion into DB
      $sql = "INSERT INTO User(
      user_id, email, username, password, registeration_date)
      VALUES ('$userID', '$email', '$username', '$password', now())";
      if ($connection->query($sql) === TRUE) {
          echo "Registered Successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $connection->error;
      }

      $connection->close();
    }

?>
