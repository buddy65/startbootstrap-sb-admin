<!DOCTYPE html>

<html lang="en">

<?php include('standardheader.php') ?>

<body class="sb-nav-fixed">
<?php include('navbartop.php') ?>

<main>
<ol class="breadcrumb">

<li class="breadcrumb-item">

<a href="#">Dashboard</a>

</li>

<li class="breadcrumb-item active">My Dashboard</li>

</ol>


<!-- Example DataTables Card-->

<div class="card mb-3">

<div class="card-header">

<i class="fa fa-table"></i> Products</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>

<tr>

<th>ID</th>

<th>Name of Product</th>

<th>Price of Product</th>

<th>Product Category</th>

<th>Product Details</th>

<th>Edit</th>

<th>Delete</th>
</tr>

</thead>

<tfoot>

<tr>

<th>ID</th>

<th>Name of Product</th>

<th>Price of Product</th>

<th>Product Category</th>

<th>Product Details</th>

<th>Edit</th>

<th>Delete</th>
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

<td>
  <a class="nav-link" href="editproduct.php">
    <span class="nav-link-text">edit</span>
  </a>
</td>

<td>
  <?php echo "delete" ?>
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
</main>


<!-- /.container-fluid-->

<!-- /.content-wrapper-->

<footer class="sticky-footer">

<div class="container">

<div class="text-center">

<small>Copyright © Buddy Scharfenberg 2020</small>

</div>

</div>

</footer>

<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

<i class="fa fa-angle-up"></i>

</a>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>



</body>

</html>
