<?php include('server.php') ?>

<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <meta name="description" content="">

 <meta name="author" content="">
 <title>Page Title - CS2300 Store Manager</title>
 <link href="css/styles.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
 <div id="layoutAuthentication">
     <div id="layoutAuthentication_content">
         <main>
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-lg-7">
                         <div class="card shadow-lg border-0 rounded-lg mt-5">

     <div class="card-header">Register an Account</div>

     <div class="card-body">

       <form method="post" action="register.php">

         <?php include('errors.php'); ?>

         <div class="form-group">

           <div class="form-row">

             <div class="col-md-12">

               <label for="exampleInputName">Username</label>

               <input class="form-control" id="exampleInputName" type="text"   name="username" value="<?php echo $username; ?>" >

             </div>

           </div>

         </div>

         <div class="form-group">

           <label for="exampleInputEmail1">Email address</label>

           <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" >

         </div>

         <div class="form-group">

           <div class="form-row">

             <div class="col-md-6">

               <label for="exampleInputPassword1">Password</label>

               <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" >

             </div>

            <div class="col-md-6">

               <label for="exampleInputPassword1">Confirm Password</label>

               <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" >

             </div>

           </div>

         </div>

          <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>

       </form>

       <div class="text-center">

         <a class="d-block small mt-3" href="login.php">Login Page</a>

       <!--- <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->

       </div>

     </div>

   </div>

 </div>

 <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="js/scripts.js"></script>
</body>

</html>
