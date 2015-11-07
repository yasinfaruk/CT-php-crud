<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/6/15
 * Time: 12:11 PM
 */

session_start();
include('database.php');
include('pdo.php');

$dbconnection = $connection_object->connection('localhost',$dbusername,$dbpassword,$dbname);

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    $sql = "UPDATE `employee` SET id='$id',`name`='$name',`age`='$age',`salary`='$salary',`status`='$status',`email`='$email',`password`='$password' WHERE id='$id'";
    $preparestatement=$dbconnection->prepare($sql);
    $preparestatement->execute();
    echo("<script>alert('Successfully saved..!!')</script>");
    echo("<script>location.href='view.php'</script>");
}