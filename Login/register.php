<?php
if(isset($_POST['email']) && isset($_POST['password'])){
   
    require_once "conn.php";
    require_once "validate.php";
  
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
   
    $sql = "insert into users values('','$email', '" . md5($password) . "')";

    if(!$conn->query($sql)){
        echo "Echec inscription";
    }else{
        echo "Inscription reussie";   
    }
}
?>
