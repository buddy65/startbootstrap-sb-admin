<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<title>CS2300 Store Manager</title>

<link href="css/styles.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>


</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
        ><!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html"
                            ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard</a
                        >
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                            ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                            ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                    >Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                    >Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html"
                            ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts</a
                        ><a class="nav-link" href="tables.html"
                            ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables</a
                        >
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
<!--<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!-- Navigation>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

<a class="navbar-brand" href="index.php">Start Bootstrap</a>

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarResponsive">

<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

<a class="nav-link" href="index.php">

<i class="fa fa-fw fa-dashboard"></i>

<span class="nav-link-text">Dashboard</span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="product.php">

<i class="fa fa-check-square"></i>

<span class="nav-link-text">Create Product</span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="register.php">

<i class="fa fas fa-user"></i>

<span class="nav-link-text">Register Users</span>

</a>

</li>

</ul>

<ul class="navbar-nav sidenav-toggler">

<li class="nav-item">

<a class="nav-link text-center" id="sidenavToggler">

<i class="fa fa-fw fa-angle-left"></i>

</a>

</li>

</ul>



<li class="nav-item">

<a class="nav-link" data-toggle="modal" data-target="#exampleModal">

<i class="fa fa-fw fa-sign-out"></i>Logout</a>

</li>

</ul>

</div>

</nav>

<div class="content-wrapper">

<div class="container-fluid">

<!-- Breadcrumbs-->

<ol class="breadcrumb">

<li class="breadcrumb-item">

<a href="#">Dashboard</a>

</li>

<li class="breadcrumb-item active">My Dashboard</li>

</ol>

<!-- Icon Cards-->

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "template";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sqll = "SELECT  * from sales_stats WHERE month='Mar' ";

if (mysqli_query($conn, $sqll))

{

echo "";

}

else

{

echo "Error: " . $sqll . "<br>" . mysqli_error($conn);

}

$result = mysqli_query($conn, $sqll);

if (mysqli_num_rows($result) > 0)

{

// output data of each row

while($row = mysqli_fetch_assoc($result))

{

?>

<div class="row">

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-primary o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-comments"></i>

</div>

<div class="mr-5"><?php echo $row['Vistors']; ?> Vistors</div>

</div>

<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-warning o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-list"></i>

</div>

<div class="mr-5"><?php echo $row['revenue'];?>  Revenue</div>

</div>

<?php

}

}

else

{

echo '0 results';

}

?>

<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-success o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-shopping-cart"></i>

</div>

<div class="mr-5">123 New Orders!</div>

</div>

<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-danger o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-support"></i>

</div>

<div class="mr-5">13 New Tickets!</div>

</div>

<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

</div>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "template";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sqlll = "SELECT sales from sales_stats";

if (mysqli_query($conn, $sqlll))

{

echo "";

}

else

{

echo "Error: " . $sqlll . "<br>" . mysqli_error($conn);

}

$result = mysqli_query($conn, $sqlll);

$number=array();

if (mysqli_num_rows($result) > 0)

{

// output data of each row

while($row = mysqli_fetch_assoc($result))

{

$number[]=$row['sales'];

}

}

else

{

echo "0 results";

}

$number_formated= "[".implode(",",$number)."]";

?>

<script type="text/javascript">

window.dataf= <?php echo $number_formated; ?>

</script>

<!-- Area Chart Example-->

<div class="card mb-3">

<div class="card-header">

<i class="fa fa-area-chart"></i> Sales Chart</div>

<div class="card-body">

<canvas id="myAreaChart" width="100%" height="30"></canvas>

</div>

<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

</div>

<!-- Example DataTables Card-->

<div class="card mb-3">

<div class="card-header">

<i class="fa fa-table"></i> Data Table Example</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>

<tr>

<th>ID</th>

<th>Name of Product</th>

<th>Price of Product</th>

<th>Product Catrogy</th>

<th>Product Details</th>

</tr>

</thead>

<tfoot>

<tr>

<th>ID</th>

<th>Name of Product</th>

<th>Price of Product</th>

<th>Product Catrogy</th>

<th>Product Details</th>

</tr>

</tfoot>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "template";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * from products';

if (mysqli_query($conn, $sql)) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

$count=1;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>

<tbody>

<tr>

<th>

<?php echo $row['product_id']; ?>

</th>

<td>

<?php echo $row['product_name']; ?>

</td>

<td>

<?php echo $row['product_price']; ?>

</td>

<td>

<?php echo $row['product_cat']; ?>

</td>

<td>

<?php echo $row['product_details']; ?>

</td>

</tr>

</tbody>

<?php

$count++;

}

} else {

echo '0 results';

}

?>

</table>

</div>

</div>

<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

</div>

</div>

<!-- /.container-fluid-->

<!-- /.content-wrapper-->

<footer class="sticky-footer">

<div class="container">

<div class="text-center">

<small>Copyright © Your Website 2018</small>

</div>

</div>

</footer>

<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

<i class="fa fa-angle-up"></i>

</a>

<!-- Logout Modal-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

<button class="close" type="button" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

</div>

<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

<div class="modal-footer">

<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

<a class="btn btn-primary" href="login.html">Logout</a>

</div>

</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>

</div>

</body>

</html>
