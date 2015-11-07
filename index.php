<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/5/15
 * Time: 4:41 PM
 */

error_reporting('no');
session_start();
include('navbar.php');
include('database.php');
include('pdo.php');

$dbconnection = $connection_object->connection('localhost',$dbusername,$dbpassword,$dbname);



if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM employee WHERE email='$email' AND password='$password'";
    $data = $dbconnection->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);

    trim($dbuser = $row['email']);
    trim($dbpass = $row['password']);

    if($dbuser != "" && $dbpass != ""  )
    {
        session_start();
        $_SESSION['user']=$dbuser;
        echo ("<script>location.href='view.php'</script>");


    }
    else{

        echo "<script>alert('Your Email or Password didn\'t match !!');</script>";
        echo ("<script>location.href='index.php'</script>");
    }
}

if(isset($_POST['register']))
{
    echo ("<script>location.href='registration.php'</script>");
}
?>

<!--//================ login-form ==================-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <style>
        @import "bourbon";

        body {
            background: #eee !important;
        }

        .wrapper {
            /*margin-top: 80px;*/
            margin-bottom: 80px;
        }

        .form-signin {
            max-width: 380px;
            padding: 15px 35px 45px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,0.1);
            border-left: 2px solid orange;
            border-radius: 10px;

        .form-signin-heading,
        .checkbox {
            margin-bottom: 30px;
        }

        .checkbox {
            font-weight: normal;
        }

        .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
        @include box-sizing(border-box);

        &:focus {
             z-index: 2;
         }
        }

        input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        input[type="password"] {
            margin-bottom: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        }
    </style>

</head>
<body>

        <div class="wrapper">
            <form action="#" class="form-signin" method="POST" role="form">
            	<legend>Login Form</legend>

            	<div class="form-group">
<!--            		<label for=""></label>-->
            		<input type="text" class="form-control" name="email" id="" placeholder="Email Address">
            	</div>
                <div class="form-group">
<!--                    <label for=""></label>-->
                    <input type="text" class="form-control" name="password" id="" placeholder="Password">
                </div>



            	<div class="row">
                    <div class="col-md-6">
                        <button type="submit" name="login" class="btn btn-primary btn-block">Submit</button>

                    </div>
                    <div class="col-md-6">
                        <button type="submit" name="register" class="btn btn-success btn-block">Register</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>