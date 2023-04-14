<?php
    $servername = "localhost:4806";
    $username = "root";
    $password = "Jeel@142";
    $dbname="airline";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connection Done!";
    }
    catch(PDOException $e){
        echo "Error : COuld not connet with DB".$e->getMessage();
    }
    //header("location:login_form.html");
?>