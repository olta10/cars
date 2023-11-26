<?php include_once('header.php');?>
<style>
    body {
        background-image: url('../../images/loginback.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your background image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #C1DFF0; /* Fallback color in case the background image doesn't load */
    }
</style>
<link rel="stylesheet" type="text/css" href="../../css/login.css">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header text-center">
				<h3>Log In</h3>
			</div>
			<div class="card-body">
				<form action="../server/loginLogic.php" method="POST">
				<div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="password" name="password" id="floatingInput" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
					<input type="submit" name="submit" value="Log In" class="btn float-right login_btn">
                    </div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>

