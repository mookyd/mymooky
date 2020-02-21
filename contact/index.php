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
<h1> Contact Us At MyMooky.com</h1>
<br>
<form action="insert.php" method="post">

    <p>
        <label for="CustomerName">Customer Name:</label>
        <input type="text" name="customername" id="CustomerName">
    </p>

    <p>
        <label for="FirstName">First Name:</label>
        <input type="text" name="firstname" id="FirstName">
    </p>
    <p>
        <label for="LastName">Last Name:</label>
        <input type="text" name="lastname" id="LastName">
    </p>

    <p>
        <label for="Address">Address:</label>
        <input type="text" name="address" id="Address">
    </p>
    <p>
        <label for="City">City:</label>
        <input type="text" name="city" id="City">
    </p>

    <p>
        <label for="PostalCode">Zip Code:</label>
        <input type="text" name="postalcode" id="PostalCode">
    </p>
    <p>
        <label for="Country">Country:</label>
        <input type="text" name="country" id="Country">
    </p>

    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
