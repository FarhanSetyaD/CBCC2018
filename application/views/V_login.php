<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('fragment/header') ?>
  
</head>

<body>              
  
<div id="task" class="parallax-w" style="background-image: url(Image/background.jpg)">
	<div class="container">
		<div class="section">
			<div class="row">
				<div class="col s12 center">
 					<div class="fontt white-text"><b class="fontt"></b></div>
 					<br>
 					<br>
 					<br><br>
 				</div>
 				<div class="col m6 s12 offset-m3">
 					<center>
 					<div class="card z-depth-3 card-login">
						<div class="card-content blue" style="height: 60px;">
							<span class="card-title fontt center-align white-text" style="margin-top: -10px;"><b>Login</b></span>
						</div>
						<div class="card-content">
							<form action="Wakwaw/login" method="post">
								<div class="row">
									<div class="input-field col s10 offset-s1">
									  <input name="usern" type="text" class="validate" placeholder="">
									 <label for="icon_prefix">Username</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s10 offset-s1">
									  <input name="passw" type="password" class="validate" placeholder="">
									  <label for="icon_prefix">Password</label>
									</div>
								</div>
								<div class="row">
									<button type="submit" name="btn_login" class="col s10 offset-s1 btn btn-large waves-effect wow-color">Login</button>
								</div>
							</form>	
						</div>
					</div>
					</center>
 				</div>
			</div>
			<div class="row">
				<br>
				<br>
			</div>
		</div>
	</div>
</div>





<!-- core nav -->
<?php $this->load->view('fragment/script');?>

</html>

