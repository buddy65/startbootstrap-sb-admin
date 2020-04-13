<?php //include('server.php') ?>

<!DOCTYPE html>

<html lang="en">
<?php session_start(); $_SESSION = array(); ?>
<?php include('standardheader.php') ?>

<body class="bg-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
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


                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="register.php">Register Account</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="js/scripts.js"></script>
</body>

</html>
