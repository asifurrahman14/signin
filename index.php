<?php
session_start();
include("./db.php");
if (isset($_POST['name']) && isset($_POST['pwd'])) {
    $name = $_POST['name'];
    $password = $_POST['pwd'];
    $sql  = "INSERT INTO signin (`name`, `password`) VALUES ('$name', '$password')";
    $queryRun = mysqli_query($db, $sql);
    $status = "Error";
    if ($queryRun) {
        $status = "Sign in successfull! ";
    }
    echo "<h2>$status</h2>";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Sign In</title>
</head>


<style>
    * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    input {
        display: block;
        padding: 10px;
        width: 100%;
        margin-top: 10px;
    }

    form {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px dotted gray;
    }

    button {
        padding: 10px;
        display: block;
        margin-top: 10px;
    }
</style>

<body>

    <form action="" method="POST">
        <h2>Sign In</h2>
        <input required type="text" name="name" placeholder="Name">
        <input required type="password" name="pwd" placeholder="Password">
        <button>Submit</button>
    </form>

</body>

</html>