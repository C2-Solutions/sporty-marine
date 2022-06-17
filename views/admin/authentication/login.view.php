<?php

require_once("App/Controllers/AuthenticationController.php");

if (isset($_POST['login'])) {
    require(new AuthenticationController())::loginUser();
}

?>

<?php

// echo ();

?>

<div class="error-message">
    <?php echo (!empty($errorMessage)) ? $errorMessage : ''; ?>
</div>

<div>
   <h1 class="page-title" style="color:#000;">INLOGGEN</h1>

   <form action="login" method="post">
        <div class="login-container">
            <div class="login-box">
                <input type="text" name="username" placeholder="Username" id="username" required>
            </div>
            <div class="login-box">
                <input type="password" name="password" placeholder="Password" id="password" required>
            </div>
            <div class="login-box">
                <input type="submit" value="login">
            </div>
        </div>
    </form>
</div>
