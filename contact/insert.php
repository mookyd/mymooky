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
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Mill*on", "customers");

// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$customername = mysqli_real_escape_string($link, $_REQUEST['customername']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$postalcode = mysqli_real_escape_string($link, $_REQUEST['postalcode']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// attempt insert query execution
$sql = "INSERT INTO Customers (CustomerName, FirstName, LastName, Address, City, PostalCode, Country, Email) VALUES ('$customername', '$firstname', '$lastname', '$address', '$city', '$postalcode', '$country', '$email')";
if(mysqli_query($link, $sql)){
echo "<h1>Thank you, an email has been sent.</h1>";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

<?php
echo "<h2>Your Input:</h2>";
echo "Customer Name: ";
echo $customername;
echo "<br>";
echo "First Name: ";
echo $firstname;
echo "<br>";
echo "Last Name: ";
echo $lastname;
echo "<br>";
echo "Address: ";
echo $address;
echo "<br>";
echo "City: ";
echo $city;
echo "<br>";
echo "Postal Code: ";
echo $postalcode;
echo "<br>";
echo "Country: ";
echo $country;
echo "<br>";
echo "Email: ";
echo $email;
echo "<br>";
?>
<br>
<br>
Click <a href="http://www.mymooky.com/contact/showdb.php">here</a> to view the database
<?php
$to = "mookyd@gmail.com";
$subject = "Email From MyMooky.com";

$message = "
<html>
<head>
<title>Thank you!</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Name</th>
<td>$customername</td>
</tr>
<tr>
<th>First Name</th>
<td>$firstname</td>
</tr>
<tr>
<th>Last Name</th>
<td>$lastname</td>
</tr>
<tr>
<th>Address</th>
<td>$address</td>
</tr>
<tr>
<th>City</th>
<td>$city</td>
</tr>
<tr>
<th>Postal Code</th>
<td>$postalcode</td>
</tr>
<tr>
<th>Country</th>
<td>$country</td>
</tr>
<tr>
<th>Email</th>
<td>$email</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <mooky@mymooky.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>
</body>
</html>
