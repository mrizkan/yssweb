<?php include('admin/functions/database.php');


if (isset($_POST['email'])) {

    $email = $_POST['email'];

    $sql = "INSERT INTO subscribe VALUES (NULL, '$email' )";
    mysql_query($sql);

}
?>