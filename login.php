 <html lang="en">
 <head>

<title>Halaman Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</header>
     <?php
     /* handle error */
     if (isset($_GET['error'])) : ?>
         <div class="alert alert-warning alert-dismissible" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
         </div>
     <?php endif;?>
 
         <div class="outter-form-login">
         <div class="logo-login">
             <em class="glyphicon glyphicon-user"></em>
         </div>
             <form action="check-login.php" class="inner-login" method="post">
             <h3 class="text-center title-login">Login Member</h3>
                 <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="Username">
                 </div>
 
                 <div class="form-group">
                     <input type="password" class="form-control" name="password" placeholder="Password">
                 </div>
                
                 <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                 <div class="text-center forget">
                     <p>Forgot Password ?</p>
                 </div>
             </form>
         </div>
     </div>
 
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
   </body>
 </html>