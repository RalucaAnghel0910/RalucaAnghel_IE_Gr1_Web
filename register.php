<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accessfrom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO utilizatori (usersName, usersEmail, usersPW)
    VALUES ('$username', '$email', '$password')";

header("Location: acasa.html");

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<head>
<head>
   <link rel="stylesheet" type="text/css" href="cssregister.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>



<link href="default.css" rel="stylesheet" type="text/css" media="all" />




</head>
<body>
<div id="header-wrapper">
<div id="header" class="container">
<div id="logo">
			<h1><a href="acasa.html">RResidence</a></h1>
		</div>
	<div id="menu">
        <a href="index.html" class="logo">
            <img src="logo.jpg" alt="">
        </a>
        <ul id="navigation">
            <li>
                <a href="acasa.html">Home</a>
            </li>
            <li>
                <a href="despre_noi.html">Despre Noi</a>
            </li>
            <li>
                <a href="propietati.html">Propietati</a>
            </li>
            <li>
                <a href="galerie.html">Galerie</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="register.php">Register</a>
            </li>
        </ul>
    </div>
	</div>
</div>

<div class="register-form">
  <form action="" method="post">
    <h2 class="text-center">Sign up</h2>
    <div class="form-group">
      <input type="text" class="form-control" name="username" placeholder="Username" required="required">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Email" required="required">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">Sign up</button>
    </div>
  </form>
</div>

</head>
