<?php

$link = mysqli_connect('127.0.0.1:3306','root','','haircut');


if (isset($_POST['Lastname']) && isset($_POST['Firstname']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['time'])){
    $lastname = $_POST['Lastname'];
    $firstname = $_POST['Firstname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
   
    $sql = "INSERT INTO `zapis` (Lastname, Firstname, phone, email, date, time) values ('$lastname', '$firstname', '$phone', '$email', '$date', '$time')";   
}
if(mysqli_query($link, $sql)){
    echo "Записи успешно добавлены.";
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
}

header('Location: http://haircut ');
exit();
?>