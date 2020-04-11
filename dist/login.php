<?php include('server.php') ?>

<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <meta name="description" content="">

 <meta name="author" content="">

 <title>SB Admin - Start Bootstrap Template</title>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">

 <div class="container">

   <div class="card card-login mx-auto mt-5">

     <div class="card-header">Login</div>

     <div class="card-body">

       <form method="post" action="login.php">

          <?php include('errors.php'); ?>

         <div class="form-group">

           <label for="exampleInputEmail1">Username</label>

           <input class="form-control"  type="text" name="username">

         </div>

         <div class="form-group">

           <label for="exampleInputPassword1">Password</label>

           <input class="form-control"  type="password" name="password">

         </div>

         <div class="form-group">

           <div class="form-check">

             <label class="form-check-label">

               <input class="form-check-input" type="checkbox"> Remember Password</label>

           </div>

         </div>

         <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>

       </form>

       <div class="text-center">

         <a class="d-block small mt-3" href="register.php">Register an Account</a>

      <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->

       </div>

     </div>

   </div>

 </div>

 <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="js/scripts.js"></script>
</body>

</html>
