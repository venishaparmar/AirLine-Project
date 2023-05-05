<html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "dbconnection.php";

    $first_name = trim($_REQUEST['fname']);
    $last_name = trim($_REQUEST['lname']);
    $email = trim($_REQUEST['email']);
    $phone_number = trim($_REQUEST['phnnum']);
    $password = trim($_REQUEST['pswd']);
    $confirm_password = trim($_REQUEST['confirmpswd']);
    $var = $_REQUEST['bod'];
    $bod = date('Y-m-d', strtotime($var));
    $birth_date = trim($bod);

    $is_valid = true;

    // Validate first name
    if (empty($first_name) || !preg_match('/^[A-Za-z]+$/', $first_name)) {
        $is_valid = false;
        header("location:../html/login_form.php? msg=Please enter a valid first name.");
    }

    // Validate first name
    if (empty($last_name) || !preg_match('/^[A-Za-z]+$/', $last_name)) {
        $is_valid = false;
        header("location:../html/login_form.php? msg=Please enter a valid last name.");
    }

    // Validate email
    if (empty($email)) {
        $is_valid = false;
        header("location:../html/login_form.php? msg=Please enter an email address.");
    } else {
        // Check if email is not already in database
        // Assuming $pdo is the database connection object
        $res = $conn->prepare("SELECT * FROM user WHERE u_email = :email");
        $res->execute(['email' => $email]);
        $user = $res->fetch();
        if ($user) {
            $is_valid = false;
            header("location:../html/login_form.php? msg=User is already have account.");
        }
    }

    // Validate phone number
    if (empty($phone_number) || !preg_match('/^\d{10}$/', $phone_number)) {
        $is_valid = false;
        header("location:../html/login_form.php? msg=Please enter a valid phone number.");
    }

    // Validate password
    if (empty($password) || strlen($password) < 8 || $password !== $confirm_password) {
        $is_valid = false;
        header("location:../html/login_form.php? msg=Password and confirm password are not matched.");
    }

    // Validate birth date
    if (empty($birth_date)) {
        $is_valid = false;
        header("location:../html/login_form.php? msg=Please enter a birth date.");
    } else {
        $today = new DateTime();
        $birthdate = new DateTime($birth_date);
        if ($birthdate > $today) {
            $is_valid = false;
            header("location:../html/login_form.php? msg=Birth date should not be above today date.");
        }
    }

    if ($is_valid) {
        // Assuming $pdo is the database connection object
        $sql = "insert into user(u_email,password,bod,u_name,surname,u_num) values(:email,:pswd,:bod,:fname,:lname,:phn);";

        $res = $conn->prepare($sql);

        $res->bindParam(':fname', $first_name);
        $res->bindParam(':lname', $last_name);
        $res->bindParam(':email', $email);
        $res->bindParam(':phn', $phone_number);
        $res->bindParam(':pswd', $password);
        $res->bindParam(':bod', $birth_date);

        $res->execute();
        header("Location: ../html/home.html");
    }

    unset($pdo);
}
?>

</html>