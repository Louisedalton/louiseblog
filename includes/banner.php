<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>Today's Inspiration</h1>
			<p> 
			    One day your life <br> 
			    will flash before your eyes. <br> 
			    Make sure it's worth watching. <br>
				<span>~ Gerard Way</span>
			</p>
			
		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
				<h2>Register / Log In</h2>
				<div style="width: 60%; margin: 0px auto; text-align:center;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
			<a href="register.php" class="button">Join us!</a>
					<a href="login.php" class="button">Sign In!</a>
			</form>
		</div>
	</div>
<?php } ?>