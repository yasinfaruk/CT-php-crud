<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/5/15
 * Time: 4:42 PM
 */
include("navbar.php");
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
            <form class="form-horizontal" action="insert.php" method="POST">
                <fieldset>
                    <legend>Registration Form</legend>

                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input name="name" type="text" class="form-control" id="inputEmail" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Age</label>
                        <div class="col-lg-10">
                            <input  name="age" type="text" class="form-control" id="inputEmail" placeholder="Age">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Salary</label>
                        <div class="col-lg-10">
                            <input name="salary" type="text" class="form-control" id="inputEmail" placeholder="Salary">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
                            <input name="status" type="text" class="form-control" id="inputEmail" placeholder="Status">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            <button name="cancel" type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</body>
</html>
