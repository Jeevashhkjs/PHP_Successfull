<?php
$UserName = $_POST['userName'];

$PassWord = $_POST['password'];


try{
   $UserDatas = $app['db'] -> query("SELECT * FROM usersDetailsData WHERE userName = '$UserName' AND Passwords = '$PassWord'");
   $dataExit = $UserDatas->fetchAll(PDO::FETCH_OBJ);

   if(!$dataExit)
   {
      header("location:/");
   }
   else
   {
      $_SESSION['getData'] = [
         'userName' => $UserName
      ];

      header("location:/home");
   }
}
catch(PDOException $e)
{
   die("connection error".$e -> getMessage());
}


   


?>