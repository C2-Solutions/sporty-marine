<?php require 'shared/header.php' ?>

<!-- <div>  class="moet-hier-nog-een-class-container-van-maken"
   <h1 class="page-title" style="color:#000;">INLOGGEN</h1>

   <form method="post" action="login">
       <div class="login-container">
           <div class="login-box">
               <input type="text" id="username" name="username" class="login-field"placeholder="E-mail/Gebruikersnaam">
           </div>

           <div class="login-box">
               <input type="password" id="password" name="password" class="login-field" placeholder="Wachtwoord">
           </div>

           <div class="login-box">
               <input type="submit" id="login" name="login" class="button" value="Inloggen"/>
           </div>
       </div>
   </form>
</div> -->

<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Uw e-mail wordt nooit met derden gedeeld.</div>
    </div>
    <br>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php require 'shared/footer.php' ?>
