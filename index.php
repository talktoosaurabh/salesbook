<?php 
	include 'includes/header.php'; 
	include 'dbconn.php';
	$error='';
?>

<?php

if (isset($_POST['login'])) {

	$useremail=$_POST['Username'];
	$password=$_POST['Password'];

	$data= mysqli_query($conn,"SELECT * FROM `cmpany_admin_profile` where cmp_admin_email='$useremail' ");
	$userid_count=mysqli_num_rows($data);

	if($userid_count)
	{
		$user_pass = mysqli_fetch_assoc($data); 
		$db_pass = $user_pass['cmp_admin_psw'];
	
		$pass_decode = password_verify($password,$db_pass);           
		echo $pass_decode;
		if($pass_decode)
		{
			header('location:admin-dashboard.php');
		}
		else
			{
				$error='<div class="alert alert-danger text-center" role="alert">Incorrect Password</div>';	
			}

	}
	else
		{
			$error='<div class="alert alert-danger text-center" role="alert">Incorrect Username </div>';
		}

}


?>

<div class="main_div">
    	<div class="sub_div">
			<?php echo $error; ?>
    		<h3 class="text-center">login</h3>
			<p class="text-center">Get started with your free account</p>
			
	    	<!-- <button class="form-control text-center text-white bg-danger mb-3"><i class="fa fa-google bg-danger mr-2" aria-hidden="true"></i>Login via Gmail</button>
	    	<button class="form-control text-center text-white bg-primary"><i class="fa fa-facebook bg-primary mr-2" aria-hidden="true"></i>Login via Facebook</button> -->
    	 
	    	<div>
	    		<form method="post">
				  <div class="align-items-center">  
				    <div class="mt-4">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-user "></i></div>
				        </div>
				        <input type="text" name="Username" class="form-control" placeholder="Username" required>
				      </div>
				    </div>
				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend ">
				          <div class="input-group-text"><i class="fa fa-lock"></i></div>
				        </div>
				        <input type="password" name="Password" class="form-control"  placeholder="Password" required>
				      </div>
				    </div>
				    <div class="text-center mt-3">
				    	<a href="admin-signin.php" >Don't have an Account?</a>
				    </div>
				    <div class="mt-3">
				      <button type="submit" name="login" class="form-control btn btn-primary mb-2">Login</button>
				    </div>
				  </div>
				</form>
	    	</div>
    	</div> 	
    </div>

<?php include 'includes/footer.php'; ?>

