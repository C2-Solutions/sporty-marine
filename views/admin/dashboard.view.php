<!--SCUMMY SHIT!! REMOVE THIS AFTER LOGIN IS DONE-->

<?php $_SESSION['adminid']     =   (!empty($admin['id'])) ? $admin['id'] : 'a';
$_SESSION['username']    =   (!empty($admin['username'])) ? $admin['username'] : 'a';
?>
<h1>U bent nu ingelogd als administrator. Welkom <?php echo $_SESSION['username']?>.</h1>
