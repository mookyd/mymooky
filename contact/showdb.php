<!DOCTYPE HTML>
<html>
<head>
<title>MyMooky.com</title>
<link rel="shortcut icon" type="image/png" href="http://assets.mymooky.com/favicon.ico">
<link rel="stylesheet" type="text/css" href="http://assets.mymooky.com/CSS/mystyle.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112906148-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112906148-2');
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="topnav">
  <a class="active" href="http://www.mymooky.com">Home</a>
  <a href="http://blog.mymooky.com">Blog</a>
  <a href="https://www.youtube.com/user/mookydesai/videos" target=new>YouTube</a>
  <a href="https://www.instagram.com/mymooky/" target=new>Instagram</a>
  <a href="http://mymooky.slack.com" target=new>Slack</a>
  <a href="http://www.mymooky.com/contact" target=new>Contact</a>

</div>




<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<br>
<br>
<br>
<h1>MyMooky.com Customer Database</h1>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "Mill*on";
$dbname = "customers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CustomerName, FirstName, LastName, Address, City, PostalCode, Country, Email FROM Customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr align=left><th>Customer Name</th><th>First Name</th><th>Last Name</th><th>Address</th><th>City</th><th>Zip Code</th><th>Country</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["CustomerName"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Address"]."</td><td>".$row["City"]."</td><td>".$row["PostalCode"]."</td><td>".$row["Country"]."</td><td>".$row["Email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
