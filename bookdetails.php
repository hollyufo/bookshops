<?php
	require'./function/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/bookdetails.css">
	<title>Document</title>
</head>
<body>
		<!--start nav bar-->
		<nav class="navbar navbar-expand-md navbar-dark ">
   
   <div class="dual-collapse1">
	  <b> <a class="navbar-brand mx-auto" href="index.html">LIBRARY</a></b>
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
		   <span class="navbar-toggler-icon "></span>
	   </button>
   </div>
   <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 navpos">
	   <ul class="navbar-nav ml-auto itme-end">
		   <li class="nav-item">
			   <b><a class="nav-link" href="./index.php">Home</a></b>
		   </li>
		   <li class="nav-item">
			  <b> <a class="nav-link" href="./ourbooks.php">Books</a></b>
		   </li>
		   <li>
			   <b> <a class="nav-link" href="./contactus.php">contact us</a></b>
		   </li>
	   </ul>
   </div>
</nav>
<!--end nav bar-->

<!-- php code -->
<?php 
$id = $_GET['id'];
$sql    = "SELECT * FROM books where ID=".$id."";
$result = mysqli_query($conn,$sql);



$row= mysqli_fetch_array($result);
?>


<div class="container  " style="height: 70px;">
</div>
<div class="container ">
	<div class="row">
  <div class="col-sm-6">
  	<div><span class="book">Name :</span class="book"><span><?php echo $row['title']; ?></span></div>
  	<div><span class="book">Author :</span  class="book"><span><?php echo $row['auteur']; ?></span></div>
  	<div><span class="book">Prix :</span   class="book"><span><?php echo $row['Prix']; ?></span></div>
  	<div><span class="book">Quantity in Stock :</span   class="book"><span><?php echo $row['QStock']; ?></span></div>
  	<div><span class="book">Date Of Publication :</span class="book"><span><?php echo $row['publishedat']; ?></span></div>





  </div>
  <div class="col-sm-4" style="text-align: center;">
  	
<img style="width:200px; height: auto;" src=<?php echo "./bookimg/".$row['image'].""; ?>>
  </div>
</div>
</div>
<!--scripts-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>