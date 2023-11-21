<?php
   function register(){
    global $conn;
  
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $place = $_POST["place"];
  
  
    if(empty($name) || empty($username) || empty($password) || empty($contact) || empty($dob) || empty($age) || empty($place)){
      echo "Please Fill Out The Form!";
      exit;
    }
  
    $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    if(mysqli_num_rows($user) > 0){
      echo "Username Has Already Taken";
      exit;
    }
  
    $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$password', '$contact', '$dob', '$age', '$place')";
    mysqli_query($conn, $query);
    echo "Registration Successful";
  }
?>