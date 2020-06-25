<html>
<head>
<!-- I used bootstrap library to be good in a lot of different screens sizes-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Control Panel</title>
<link rel="shortcut icon" href="favicon.ico" />
</head>

<body >

<div class ="row" style="background-color:#C8D7E0;"> <h3 style="text-align:center; margin: 0 auto; color:#ffffff;   font-family: Times New Roman, Times, serif;">
<br>Deem Aldekhial<br>IoT<br>_</h3>
</div>


<br>
<div class="container" ><!--background-color: gray;     <br><br><br><br><br>-->
<div class="row ">
 <h1 style ="text-align:center; margin: 0 auto; color:#4A92BD;">&nbsp  Control Panel</h1>
</div>

<form action="" method="post"> 

 <div class="col my-auto mx-auto" style="border-style: dashed;border-color:#4A92BD;  background: #E2EFF7;font-family: Lucida Console, Courier, monospace;">

<div class ="row">
<button type="submit" class="btn btn-outline-info btn-block" name="forward"><span class="glyphicon glyphicon-arrow-up"></span><p>Forward</p></button>
</div>

<div class ="row">
 <div class="col">
<button type="submit" class="btn btn-outline-info btn-block" name="Left" "><span class="glyphicon glyphicon-arrow-left"></span><p>Left</p></button>
 </div>
 <button type="submit" class="btn btn-danger  btn-secondary" style="width:50%" name="Stop"><p><br>Stop</p></button><!--btn-outline-danger-->

 <div class="col">
<button type="submit" class="btn btn-outline-info btn-block" name="Right" "><span class="glyphicon glyphicon-arrow-right" id="right"></span><p>Right</p></button>
 </div>
</div>

<div class ="row">
<button type="submit" class="btn btn-outline-info btn-block" name="Back" ><span class="glyphicon glyphicon-arrow-down"></span><p>Back</p></button>
</div>
</div>
</form> 
<?php 
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "ControlPanel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['forward'])){
			$sql0 = "Delete FROM instruction ;";
		$conn->query($sql0);
	$sql = "INSERT INTO instruction (Type) VALUES ('F');";
$conn->query($sql);
}
if(isset($_POST['Back'])){
			$sql0 = "Delete FROM instruction ;";
		$conn->query($sql0);
	$sql = "INSERT INTO instruction (Type) VALUES ('B');";
$conn->query($sql);
}
if(isset($_POST['Right'])){
			$sql0 = "Delete FROM instruction ;";
		$conn->query($sql0);
	$sql = "INSERT INTO instruction (Type) VALUES ('R');";
$conn->query($sql);
}
if(isset($_POST['Left'])){
			$sql0 = "Delete FROM instruction ;";
		$conn->query($sql0);
	$sql = "INSERT INTO instruction (Type) VALUES ('L');";
$conn->query($sql);
}
if(isset($_POST['Stop'])){	 
		$sql0 = "Delete FROM instruction ;";
		$conn->query($sql0);
	$sql = "INSERT INTO instruction (Type) VALUES ('S');";
$conn->query($sql);
}
$conn->close();
?>

<iframe src="Task1-php.php" style="border:none; height:200px;width:300px;"></iframe>

 </div><!-- container -->

</body>
</html>

