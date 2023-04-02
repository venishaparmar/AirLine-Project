
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        require_once "dbconnection.php";
        // servername => localhost
        // username => root
        // password => empty
        // database name => airlines
        
        $sql= "insert into user(u_email,password,bod,u_name,surname,u_num) values(:email,:pswd,:bod,:fname,:lname,:phn);";
        // $sql = "INSERT INTO users  VALUES ('$fname','$lname','$email','$phnnum','$pswd','$bod')";

        $res = $conn->prepare($sql);

        $res->bindParam(':fname',$_REQUEST['fname']);
        $res->bindParam(':lname',$_REQUEST['lname']);
        $res->bindParam(':email',$_REQUEST['email']);
        $res->bindParam(':phn',$_REQUEST['phnnum']);
        $res->bindParam(':pswd',$_REQUEST['pswd']);
        $var = $_REQUEST['bod'];
        $bod = date('Y-m-d', strtotime($var));
        $res->bindParam(':bod',$bod);
        //bindvalue();  work at compile time
        $res->execute();
        //echo("Data inserted ");

        unset($pdo);
    }
    ?>
