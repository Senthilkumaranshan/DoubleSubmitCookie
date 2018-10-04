
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
        <title>Double Submit Cookies</title>
        <link rel='stylesheet' href='https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1531597991' />
    </head>
	
	<body class="page-template-default page page-id-137 woocommerce dokan-theme-dokan">

		<main id="main" class="site-main main">
			<section class="section">
				<div class="container">
					<div class="row">
						<div class="container container--mini"><img class="img-fluid mx-auto d-block mb-5" width="200px" height="200px" src="signin_icon.png" alt="logo">
							<form name="loginform" id="loginform" action="submit_details.php" method="post">

								<div class="form-group">
									<label for="user_login">Username(admin)</label>
									<input type="text" name="user_name" id="user_name" class="form-control" value="" size="20" required>
								</div>
								<div class="form-group">
									<label for="user_pass">Password(admin)</label>
									
									<input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20" required>
								</div>

								<div class="form-group">
								  <input style="background-color:#00bfff !important" type="submit" name="wp-submit" id="wp-submit" class="btn btn-brand btn-block mb-4" value="Sign In">
								</div>

							</form>
							
						</div>
					</div>
				</div>
			</section>
        </main>

</body>
</html>