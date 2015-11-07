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

$dbconnection = $connection_object->connection('localhost',$dbusername,$dbpassword,$dbname);

$id = $_GET['id'];

if(isset($id)){
    $sql = "DELETE FROM employee WHERE id='$id'";

    $preparestatement = $dbconnection->query($sql);
    $preparestatement -> execute();

    echo "<script>alert('successfully deleted.');</script>";
    echo ("<script>location.href='view.php'</script>");
}