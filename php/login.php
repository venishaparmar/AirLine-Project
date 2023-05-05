<html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "dbconnection.php";

    $email = trim($_REQUEST['email']);
    $password = trim($_REQUEST['pswd']);

    $res = $conn->prepare("SELECT * FROM user WHERE u_email = :email AND password = :password");
    $res->execute(['email' => $email, 'password' => $password]);
    $user = $res->fetch();

    // Check if user exists and the password is correct
    if (!$user) {
        header("location:../html/login_form.php? msg=Invalid email or password.");
        exit();
    }
    header("Location:../html/home.php");
}
?>

</html>