<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>Better Than the Movie Since 2020</h1>
			<p> <br>
			
				<span>for people who write in the margins</span>
			</p>
			
		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
				<h2>Register / Log In</h2>
				<div style="width: 60%; margin: 0px auto; text-align:right;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
			<a href="register.php" class="button">Join us!</a>
					<a href="login.php" class="button">Sign In!</a>
			</form>
		</div>
	</div>
<?php } ?>