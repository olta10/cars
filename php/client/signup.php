<?php include_once('header.php'); ?>

<style>
    body {
        background-color: #9A616D;
    }
</style>

<style>
    body {
        background-color: #C1DFF0;
    }
</style>

<link rel="stylesheet" type="text/css" href="../../css/login.css">

<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header text-center">
                <h3>Sign Up</h3>
            </div>
            <div class="card-body">
                <form action="../server/signupLogic.php" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="name">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="emailaddress">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="password" name="confirm_password" class="form-control" placeholder="confirmpassword">
                    </div>
                    <div class="form-group">
					<input type="submit" name="submit" value="Sign up" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
				Already have an account? <a href="login.php">Log In</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
