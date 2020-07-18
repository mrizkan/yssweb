<?php include('admin/functions/database.php');


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $bpalce = $_POST['bpalce'];

    $sql = "INSERT INTO volunteer VALUES (NULL, '$name', '$phone', '$email', '$bpalce')";
    mysql_query($sql);

}
?>