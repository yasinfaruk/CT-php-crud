<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/5/15
 * Time: 4:43 PM
 */
    error_reporting('no');
    include('database.php');
    include('pdo.php');


    $dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

    if(isset($_POST['submit'])){


        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];
        $status = $_POST['status'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty(trim($name)) && !empty(trim($age)) && !empty(trim($salary)) && !empty(trim($status)) && !empty(trim($email)) && !empty(trim($password)))
        {
            $sql = "INSERT INTO `employee`( `name`, `age`, `salary`, `status`, `email`, `password`) VALUES ('$name', '$age', '$salary', '$status', '$email', '$password')";
            $preparestatement=$dbconnection->prepare($sql);
            $preparestatement->execute();
            echo("<script>alert('Successfully saved..!!')</script>");
            echo("<script>location.href='index.php'</script>");
        }else{

            echo("<script>alert('Fill out the all fields.')</script>");
            echo("<script>location.href='registration.php'</script>");
        }
    }
?>
