<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Thank you for your payment</title>
</head>

<body>
    <h1>Thank you for your payment!</h1>

    <p>Payment Details:</p>
    <ul>
        <li>Amount: <?php echo $_SESSION['payment_amount']; ?></li>
        <li>Payment Method: <?php echo $_SESSION['payment_method']; ?></li>
        <li>Name: <?php echo $_SESSION['customer_name']; ?></li>
        <li>Email: <?php echo $_SESSION['customer_email']; ?></li>
    </ul>
</body>

</html>