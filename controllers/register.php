<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$phNumber = $_POST['phNumber'];
$userName = $_POST['userName'];
$password = $_POST['password'];

try{
    $sql = $app['db'] -> query("INSERT INTO usersDetailsData (FirstName,LastName,EmailID,PhoneNumber,userName,Passwords,created_at,updated_at) VALUES ('$name','$lname','$mail','$phNumber','$userName','$password',now(),now())");
    header('location:/home');
}
catch(PDOException $e)
{
    echo "insert error".$e -> getMessage();
}

?>