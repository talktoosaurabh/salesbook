<?php

include 'dbconn.php';

$display_message='';

if(isset($_POST['signup'])){

	$fullname=$_POST['fname'];
	$gmail=$_POST['gmail'];
	$phone=$_POST['phone_no'];
	$company_code='';
	$cmp_name=$_POST['cmpny_name'];
	$pass=$_POST['pass'];
	$cnfrm=$_POST['cnfrm_pass'];


	if(strcmp($pass, $cnfrm)!=0){
		$sau='<div class="alert alert-danger text-center" role="alert">Password does not match</div>';
	}

    else
    {  
	   $hash_pass=password_hash($pass,PASSWORD_BCRYPT);
	   
	   $code= mysqli_query($conn,"SELECT * FROM `cmpany_admin_profile` ");
	   $count=1;
	   while($res=mysqli_fetch_array($code)){
			$count++;
	   }
	   $company_code = "SB00" . "$count" ;

	   $querry= "INSERT INTO `cmpany_admin_profile`( `cmp_admin_name`, `cmp_admin_email`, `cmp_admin_contact_number`, `cmp_code`, `cmp_name`, `cmp_admin_psw`) VALUES ('$fullname','$gmail','$phone','$company_code','$cmp_name','$hash_pass')";
	   
	   $data=mysqli_query($conn,$querry);

       if($data){
        $display_message='<div class="alert alert-success text-center" role="alert">Registartion Success</div>';
       }
       else{
        $display_message='<div class="alert alert-danger text-center" role="alert">Error ! Please try again</div>';
       }
       
    }    
}

?>

<?php include 'includes/admin-signin_header.php'; ?>

    <div class="main_div">
    	<div class="sub_div">

    		<span><?php echo $display_message; ?></span> <!-- for displaying success or error on top -->

    		<h3 class="text-center">Create Account</h3>
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
				        <input type="text" name="fname" class="form-control" placeholder="Full Name" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-google"></i></div>
				        </div>
				        <input type="email" name="gmail" class="form-control"  placeholder="E-mail" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-phone"></i></div>
				        </div>
				        <input type="number" name="phone_no" class="form-control"  placeholder="Contact Number" required>
				      </div>
				    </div>

                    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-building"></i></div>
				        </div>
				        <input type="text" name="cmpny_name" class="form-control"  placeholder="Company Name" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-lock"></i></div>
				        </div>
				        <input type="password" name="pass" class="form-control"  placeholder="Create Password" required>
				      </div>
				    </div>

				    <div class="mt-3">
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-lock "></i></div>
				        </div>
				        <input type="password" name="cnfrm_pass" class="form-control"  placeholder="Confirm Password" required>
				      </div>
				    </div>

				    <div class="text-center mt-3">
				    	<a href="index.php" >Already have an Account?</a>
				    </div>

				    <div class="mt-3">
				      <button type="submit" name="signup" class="form-control btn btn-primary mb-2">Signup</button>
				    </div>
				  </div>
				</form>
	    	</div>
    	</div> 	
    </div>

<?php include 'includes/admin-signin_footer.php'; ?>
