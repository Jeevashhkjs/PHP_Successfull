<?php
$UserName = $_POST['userName'];
$PassWord = $_POST['password'];

try{
   $UserDatas = $app['db'] -> query("SELECT * FROM usersDetailsData WHERE userName = '$UserName' and Passwords = '$PassWord'");
   $dataexist = $UserDatas->fetchAll(PDO::FETCH_OBJ);

   if($dataExists){
    header("location:/home");
   }
   else{
    echo "You have no account";
   }
}
catch(PDOException $e)
{
    die("Check error".$e->getMessage());
}
?>