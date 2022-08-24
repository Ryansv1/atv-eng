<?php

if(isset($_POST['submit']))
{
   include ('./conn.php');
    $userLogin = $_POST['userLogin'];
   $userEmail = $_POST['userEmail'];
   $userPass = $_POST['userPass'];
   $result = mysqli_query($conn, "INSERT INTO users (userLogin,userEmail,userPass) 
   VALUES('$userLogin', '$userEmail', '$userPass')");
    echo "<script>alert('Usuário cadastrado com sucesso, redirecionando ao login...');</script>";
    header("refresh:1;url=/Lycooper-N/login.php");
}
else
{
    echo "erro";
}
?>