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

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilizatori WHERE usersName='$username' AND usersPW='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Welcome " . $row["usersName"];
        }


    header("Location: propietati.html");
    } else {
        echo "Invalid login credentials";
    }
    $conn->close();
}
?>
<head>
<head>
   <link rel="stylesheet" type="text/css" href="csslogin.css">
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

<div class="login-form">
  <form action="" method="post">
    <h2 class="text-center">Log in</h2>
    <div class="form-group">
      <input type="text" class="form-control" name="username" placeholder="Username" required="required">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
  </form>
</div>
</head>