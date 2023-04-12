<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$userName = $_POST['userName'];
$password = $_POST['password'];

try{

    $allDAtas = $app['db'] -> query("SELECT * FROM usersDetailsData WHERE EmailID = '$mail' AND userName = '$userName'");
    $OneData = $allDAtas->fetchAll(PDO::FETCH_OBJ);

    if($OneData)
    {
       $_SESSION['user_already_exists'] = 'The user exists';
       header("location:/logIn");
    }
    else
    {
        $sql = $app['db'] -> query("INSERT INTO usersDetailsData (FirstName,LastName,EmailID,userName,Passwords,created_at,updated_at) VALUES ('$name','$lname','$mail','$userName','$password',now(),now())");

        $_SERVER['login'] = [
            'email' => $userName
        ];

        header('location:/home');
    }

}
catch(PDOException $e)
{
    echo "insert error".$e -> getMessage();
}

?>