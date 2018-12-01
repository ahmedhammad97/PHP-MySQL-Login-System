<?php

    //Connection to DB
    $connection = new mysqli("localhost", "root", "", "LoginForm");

    //Check connection
    if ($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
        return;
    }

    //Client Request
    if(isset($_POST["username"])){
      //Sent Data
      $username = $_POST["username"];
      $password = md5($_POST["password"]);

      $sql = "SELECT * FROM User WHERE username = '$username' ";
      $result = $connection->query($sql);

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          if($row["password"] == $password){
            echo "Welcome ". $username;

            //Get Id
            $user_id = $row["user_id"];

            //Update last_login_date
            $sql = "UPDATE User SET last_login_date = now() WHERE user_id = '$user_id'";
            if ($connection->query($sql) === TRUE) {
                echo " .. Last login updated";
                return;
            } else {
                echo "Error updating last record: " . $connection->error;
                return;
            }

          }
          else{
            echo "Wrong Password";
          }
      } else {
          echo "No username matched";
      }


    }


      //Lookup for username
      /*$sql = "SELECT username, password, user_id FROM LoginForm WHERE username = '$username' ";
      $result = mysqli_query($connection,$sql);
      while ($row = mysqli_fetch_array($result)){
        if($password == row["password"]){
          echo "Welcome " . $username . " .. ";

          //Get Id
          $user_id = result["user_id"];

          //Update last_login_date
          $sql = "UPDATE LoginForm SET last_login_date = now() WHERE userId = '$user_id'";
          if ($connection->query($sql) === TRUE) {
              echo "Last login updated";
              return;
          } else {
              echo "Error updating last record: " . $connection->error;
              return;
          }

        }
        else{
          echo "Wrong password!";
          return;
        }

        $connection->close();
        echo "No username matched!";

      }

    }*/

?>
