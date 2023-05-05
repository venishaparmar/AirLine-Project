<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error : COuld not connet with DB" . $e->getMessage();
}
?>

</html>