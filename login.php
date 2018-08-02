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
        <p class="w3-left">SignIn</p>


  </header>


        <div class="container">
            <form class="form-horizontal" method="post" action="login_action.php">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" name="pass" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-default w3-button w3-black w3-section">
                <i class="fa fa-paper-plane"></i>Sign in</button>
               <a href="register.php"  class="w3-bar-item w3-button w3-padding">not register??..</a>

            </form>
        </div>
    </body>
</html>