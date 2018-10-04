<?php

	if(isset($_POST['user_name']) && isset($_POST['pwd']))
	{
		$user = $_POST['user_name'];
		$pwd =$_POST['pwd'];

		if (($user=='admin') && ($pwd=='admin'))
		{
			//echo "USER LOGIN SUCCESSFUL.";	
			session_start();
			$csrf_token_value = base64_encode(openssl_random_pseudo_bytes(32));
			$_SESSION['csrf_token'] = $csrf_token_value;
			$session_id = session_id();
			setcookie('session_cookie',$session_id,time()+60*60*24*30,'/');
			setcookie('csrf_cookie',$_SESSION['csrf_token'],time()+60*60*24*30,'/');
		}

		else
		{
			echo "Wrong Credentials.";
			exit();
		}

	}

?>


<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
        <title>Double Submit Cookies</title>
        <link rel='stylesheet' href='https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1531597991' />
		
		
    </head>
    <body class="page-template-default page page-id-7 page-parent woocommerce woocommerce-account woocommerce-page dokan-theme-dokan">
<a href='logout.php' name="logout" class="btn btn-brand btn-block btn-lg mb-4 mt-3" style="margin:0;background-color:#00bfff !important;">log out</a>
		<main id="main" class="site-main main">
			<section class="section">
				<div class="container">
					<div class="row">
						<div class="container container--xs">
							<div class="woocommerce">



								<div id="signup_div_wrapper" style="margin-top:-100px !important">
									<img class="img-fluid mx-auto d-block mb-5" width="100px" height="100px" src="signin_icon.png" alt="logo">
									<h1 style="margin-top:-50px !important"class="mb-1 text-center">User Details</h1>
									<p class="fs-14 text-gray text-center mb-5">Fill all details</p>

    												<input id="fill" type="button" class="btn btn-brand btn-block btn-lg mb-4 mt-3" style="margin:0;background-color:#00bfff !important;" name="fill" value="Auto Fill Details" />

										<form method="post" action="final.php" class="register">

											<p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
												<label for="reg_sr_firstname">Name <span class="required">*</span></label>
												<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="name" value=""  required/>
											</p>

											<p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
												<label for="reg_sr_lastname">Email <span class="required">*</span></label>
												<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" value=""  required />
											</p>
			
			
											<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="reg_email">Phone Number <span class="required">*</span></label>
												<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="phone" value="" />
											</p>

											<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="reg_password">Address <span class="required">*</span></label>
												<textarea class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="address"> </textarea>
											</p>
											
											<p class="woocomerce-FormRow form-row">
												          
												<input type="submit" class="btn btn-brand btn-block btn-lg mb-4 mt-3" style="margin:0;background-color:#00bfff !important;" name="submit" value="Submit" />
											</p>
											
											
											
											<input type="hidden" name="csrf" value="" id="csrf"/>
    
										</form>
									

                                        <p class="text-gray-soft text-center small mb-2">By clicking "Submit" you can submit your details.</p>
   

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        </main>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
	$(document).ready(function()
	{
		var name = "csrf_cookie" + "=";
		var cookie_value = "";
		var decoded_cookie = decodeURIComponent(document.cookie);
		var d = decoded_cookie.split(';');
		for(var i = 0; i <d.length; i++) 
		{
			var c = d[i];
			while (c.charAt(0) == ' ') 
			{
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) 
			{
				cookie_value = c.substring(name.length, c.length);
				document.getElementById("csrf").setAttribute('value', cookie_value);
			}
		}
	});
	</script>
	   	   <script>
	   $(document).on("click","#fill",function(e){
		  $('#name').val("John Smith");
		  $('#email').val("John.s@gmail.com");
		  $('#phone').val("0771234567");
		  $('#address').val("No 33, Martin St, L.A.");
	   });
	   </script>
	   


	</body>
</html>