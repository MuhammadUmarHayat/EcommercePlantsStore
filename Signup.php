

<?php
include 'config.php';
$message="";
if(isset($_POST['submit']))
{//signup button

$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];


$mobile=$_POST['mobile'];
$phone=$_POST['phone'];
$usertype="customer";
 $status="active";
 $doe=date("d-m-y");
 $query="INSERT INTO `users`(`name`, `username`, `password`, `address`, `mobile`, `phone`, `usertype`, `status`, `doe`) VALUES ('$fullname','$username','$password','$address','$mobile','$phone','$usertype','$status','$doe')";
 $query = mysqli_query($con,$query);


$message="You are registered successfully";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Plant Store</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

    
<?php include("header.php")?>

<div class="login-form">
<h2 class="text-center">Registration Form</h2>
<form method="post" action="Signup.php">

<div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full name" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="User name" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="User Password" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" name="mobile" placeholder="Mobile" required="required">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" name="phone" placeholder="Phone No" required="required">
        </div>
        
        <div class="form-group">
            <button type="submit" name="submit"  class="btn btn-primary btn-block" value="SignUp">SignUp</button>
       
            <h4 class="text-center"><?php echo $message ?></h4>
          </div>
         


</form>

    
</body>
</html>