
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


<br>
<div class="container" ><!--background-color: gray;     <br><br><br><br><br>-->
<div class="row ">
<div class ="col">
 <h1 style ="text-align:center; margin: 0 auto; color:#4A92BD;">&nbsp  ROBOT INSTRUCTION</h1>
 <br>
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

$sql = "SELECT Type FROM instruction";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["Type"];
  }
} else {
  echo "no results";
}
$conn->close();
?>
<p> </p>
 </div>
</div>



				</div>



 </div><!-- container -->

</body>
</html>
