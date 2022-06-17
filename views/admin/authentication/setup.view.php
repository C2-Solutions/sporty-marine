<?php

require_once("App/Controllers/AuthenticationController.php");

if (isset($_POST['create'])) {
    require(new AuthenticationController())::createUser();
}

?>

<div class="error-message">
    <?php echo (!empty($errorMessage)) ? $errorMessage : ''; ?>
</div>

<div>
   <h1 class="page-title" style="color:#000;">Create an account</h1>

   <form action="" method="post">
        <div class="login-container">
            <div class="login-box">
                <input type="text" name="username" placeholder="Username" id="username" required>
            </div>
            <div class="login-box">
                <input type="password" name="password" placeholder="Password" id="password" required>
            </div>
            <div class="login-box">
                <input type="submit" value="Create admin account">
            </div>
        </div>
    </form>
</div>
