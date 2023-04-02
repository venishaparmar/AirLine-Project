<!DOCTYPE html>
<html>

<head>
    <title>Data Inserted</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => airlines
        $conn = mysqli_connect("localhost", "root", "", "airlines");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $fname =  $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email =  $_REQUEST['email'];
        $phnnum = $_REQUEST['phnnum'];
        $pswd = $_REQUEST['pswd'];
        $bod = $_REQUEST['bod'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users  VALUES ('$fname',
            '$lname','$email','$phnnum','$pswd','$bod')";

        if (mysqli_query($conn, $sql)) {
            // echo "<h3>data stored in a database successfully."
            //     . " Please browse your localhost php my admin"
            //     . " to view the updated data</h3>";

            // echo nl2br("\n$fname\n $lname\n "
            //     . "$phnnum\n $pswd\n $bod");
            header("Location:login_form.html");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>