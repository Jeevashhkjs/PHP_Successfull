<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$phNumber = $_POST['phNumber'];
$userName = $_POST['userName'];
$password = $_POST['password'];

try{

    $allDAtas = $app['db'] -> query("SELECT * FROM usersDetailsData WHERE EmailID = '$mail' AND userName = '$userName'");
    $OneData = $allDAtas->fetchAll(PDO::FETCH_OBJ);

    if($OneData)
    {
        echo "You have already have account";
    }
    else
    {
        $sql = $app['db'] -> query("INSERT INTO usersDetailsData (FirstName,LastName,EmailID,PhoneNumber,userName,Passwords,created_at,updated_at) VALUES ('$name','$lname','$mail','$phNumber','$userName','$password',now(),now())");
        header('location:/home');
    }

}
catch(PDOException $e)
{
    echo "insert error".$e -> getMessage();
}

?>