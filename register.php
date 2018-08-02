<?php 
require 'vendor/autoload.php';
require_once 'library.php';
    if(chkLogin()){
        header("Location: home.php");
    }
?>

<html>
<title>GROCERY STORE</title>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}

</style>


    <body class="w3-content" style="max-width:1200px">
    <!-- Sidebar/menu -->
	  <div class="w3-container w3-display-container w3-padding-16">
	    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
	    <h3 class="w3-wide"><b>GROCERY STORE</b></h3>
  </div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Top header -->
    <header class="w3-container w3-xlarge">
      <p class="w3-left">SignUp</p>


  </header>


        <form class="form-horizontal" action="register_action.php" method="post">
          <div class="form-group">
            <label for="inputFname3" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputFname3" name="fname" placeholder="First Name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputLname3" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLname3" name="lname" placeholder="Last Name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
            </div>
          </div>
           <div class="form-group">
            <label for="inputCpassword3" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="cpass" name="cpass" onblur="chk()" placeholder="Confirm Password" required>
            <div id="error"></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button class="w3-button w3-black w3-section" name="reg" type="submit">
	          <i class="fa fa-paper-plane"></i> SIGN UP </button>
            </div>
          </div>
        </form>
        <script src="myscript.js" type="text/javascript"></script>
    </body>
</html>