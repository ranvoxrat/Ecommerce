<?php
require_once("../include/initialize.php");
 ?>
  <?php
 // login confirmation
  if(isset($_SESSION['USERID'])){
    redirect(web_root."admin/index.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Ferus Shop </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
<link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
	 <div class="container">
		<div class="cover">
			<div class="front">				
				<div class="text">
                    <img src="../images/logo/img.png" width="70%"alt="">              
				</div>
			</div>
		</div>
		<div class="forms">
			<div class="form-content">
				<div class="login-form">
					<div class="title"><img src="../images/logo/ShopLogo.png" width="30%" alt=""></div>
					<form method="post" action=""  class="validate-form" >
						<div class="input-boxes">
						<?php echo check_message(); ?>
							<div class="input-box validate-input">
								<i class="fa-sharp fa-solid fa-lock"></i>
								<input class="inputVal" type="text" placeholder="Enter Email" name="user_email" id="user_email"
									required autocomplete="off">
							</div>
							<div class="input-box validate-input">
								<i class="fa-solid fa-key"></i>
								<input type="password" placeholder="Enter Password" name="user_pass" id="user_pass"
									required autocomplete="off">
							</div>
							<button type="submit" name="btnLogin" >Login
								<div class="star-1">
									<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
										style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
										version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
										<defs></defs>
										<g id="Layer_x0020_1">
											<metadata id="CorelCorpID_0Corel-Layer"></metadata>
											<path
												d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
												class="fil0"></path>
										</g>
									</svg>
								</div>
								<div class="star-2">
									<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
										style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
										version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
										<defs></defs>
										<g id="Layer_x0020_1">
											<metadata id="CorelCorpID_0Corel-Layer"></metadata>
											<path
												d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
												class="fil0"></path>
										</g>
									</svg>
								</div>
								<div class="star-3">
									<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
										style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
										version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
										<defs></defs>
										<g id="Layer_x0020_1">
											<metadata id="CorelCorpID_0Corel-Layer"></metadata>
											<path
												d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
												class="fil0"></path>
										</g>
									</svg>
								</div>
								<div class="star-4">
									<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
										style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
										version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
										<defs></defs>
										<g id="Layer_x0020_1">
											<metadata id="CorelCorpID_0Corel-Layer"></metadata>
											<path
												d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
												class="fil0"></path>
										</g>
									</svg>
								</div>
								<div class="star-5">
									<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
										style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
										version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
										<defs></defs>
										<g id="Layer_x0020_1">
											<metadata id="CorelCorpID_0Corel-Layer"></metadata>
											<path
												d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
												class="fil0"></path>
										</g>
									</svg>
								</div>
								<div class="star-6">
									<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
										style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
										version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
										<defs></defs>
										<g id="Layer_x0020_1">
											<metadata id="CorelCorpID_0Corel-Layer"></metadata>
											<path
												d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
												class="fil0"></path>
										</g>
									</svg>
								</div>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php 
if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");
         
    } else {  
  //it creates a new objects of member
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($email, $h_upass);
    if ($res==true) { 
       message("You logon as ".$_SESSION['U_ROLE'].".","success");
      if ($_SESSION['U_ROLE']=='Administrator'){
         redirect(web_root."admin/index.php");
      }else{
           redirect(web_root."admin/login.php");
      }
    }else{
      message("Account does not exist! Please contact Administrator.", "error");
       redirect(web_root."admin/login.php"); 
    }
 }
 } 
 ?> 