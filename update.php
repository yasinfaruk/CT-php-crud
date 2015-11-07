<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/5/15
 * Time: 4:43 PM
 */
session_start();
error_reporting('no');
include('navbar.php');
include('database.php');
include('pdo.php');

$dbconnection = $connection_object->connection('localhost', $dbusername,$dbpassword,$dbname);

$id = $_GET['id'];


if(isset($id)){

    $sql = "SELECT * FROM employee WHERE id='$id'";
    $data = $dbconnection->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);

    $id = $row['id'];
    $name = $row['name'];
    $age = $row['age'];
    $salary = $row['salary'];
    $status = $row['status'];
    $email = $row['email'];
    $password = $row['password'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background: #eee !important;
        }
        .wrapper{
            /*margin-top: 30px;*/
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" action="user_update.php" method="POST">
            <fieldset>
                <legend>Update Form</legend>

                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">ID</label>
                    <div class="col-lg-10">
                        <input name="id" type="text" class="form-control" id="inputEmail" value="<?php echo $row['id'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input name="name" type="text" class="form-control" id="inputEmail" value="<?php echo $row['name'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Age</label>
                    <div class="col-lg-10">
                        <input  name="age" type="text" class="form-control" id="inputEmail" value="<?php echo $row['age'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Salary</label>
                    <div class="col-lg-10">
                        <input name="salary" type="text" class="form-control" id="inputEmail" value="<?php echo $row['salary'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Status</label>
                    <div class="col-lg-10">
                        <input name="status" type="text" class="form-control" id="inputEmail" value="<?php echo $row['status'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input name="email" type="text" class="form-control" id="inputEmail" value="<?php echo $row['email'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input name="password" type="number" class="form-control" id="inputPassword" value="<?php echo $row['password'];?>">

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button name="update" type="submit" class="btn btn-primary">Update</button>
<!--                        <button name="cancel" type="reset" class="btn btn-danger">Cancel</button>-->
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
</div>
</body>
</html>
