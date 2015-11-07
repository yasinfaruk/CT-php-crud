<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/6/15
 * Time: 6:24 AM
 */
error_reporting('no');
session_start();


	$email = $_SESSION['user'];
	include ('navbar.php');
	include ('database.php');
	include ('pdo.php');
	$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

	$sql = "SELECT * FROM employee";
	$data = $dbconnection->query($sql);


//============= error ===================

//if($_SESSION['user']=="")
//{
//	echo "<script>alert('To see view page you have to login.')</script>";
//	echo("<script>location.href='index.php'</script>");
//}else{
//
//	$email = $_SESSION['user'];
//	include ('navbar.php');
//	include ('database.php');
//	include ('pdo.php');
//	$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);
//
//	$sql = "SELECT * FROM employee WHERE  email='$email'";
//	$data = $dbconnection->query($sql);
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View</title>
<!--     Latest compiled and minified CSS & JS-->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <style>
		body {
			background: #eee !important;
		}
        .wrapper{
            /*margin-top: 10px;*/
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-hover table-bordered table-responsive text-center ">
            	<thead class="text-center">
            		<tr class="warning text-center">
            			<th class="text-center">ID</th>
            			<th class="text-center">Name</th>
            			<th class="text-center">Age</th>
            			<th class="text-center">Salary</th>
            			<th class="text-center">Status</th>
            			<th class="text-center">Email</th>
            			<th class="text-center">Password</th>
            			<th class="text-center">Update</th>
            			<th class="text-center">Delete</th>
            		</tr>
            	</thead>
            	<tbody>

                <?php
                    while ($row = $data->fetch(PDO::FETCH_ASSOC)){
                ?>
            		<tr>
            			<td><?php echo $row['id']?></td>
            			<td><?php echo $row['name']?></td>
            			<td><?php echo $row['age']?></td>
            			<td><?php echo $row['salary']?></td>
            			<td><?php echo $row['status']?></td>
            			<td><?php echo $row['email']?></td>
            			<td><?php echo $row['password']?></td>
            			<td><a href="update.php?id=<?php echo $row['id']?>" style="text-decoration: none;">Update</a></td>
            			<td><a href="delete.php?id=<?php echo $row['id']?>" style="text-decoration: none;">Delete</a></td>

            		</tr>
                <?php } ?>
            	</tbody>
            </table>
        </div>
    </div>
</body>
</html>


