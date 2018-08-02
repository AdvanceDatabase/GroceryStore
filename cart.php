<?php
    require_once 'library.php';
    if(chkLogin())
    {

        echo "Logged in!";
        $name = $_SESSION["uname"];
        echo "Welcome $name!!!";


    }
    else
    {
        header("Location: login.php");
    }

    if(isset($_POST['logout']))
    {

        $var = removeall();
        if($var)
        {
            header("Location:login.php");
        }
        else
        {
            echo "Error!";
        }

    }

    ?>



<!DOCTYPE html>
<html>
<title>GROCERY STORE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

input[type=text], input[type=password] {
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
.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}

</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>GROCERY STORE</b></h3>
  </div>

  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="adv_data.php#Biscuits&Snacks" class="w3-bar-item w3-button">Biscuits & Snacks</a>
    <a href="adv_data.php#Dry Fruits" class="w3-bar-item w3-button">Dry Fruits</a>
    <a href="adv_data.php#Oil & Ghee" class="w3-bar-item w3-button">Oil & Ghee</a>
    <a href="adv_data.php#Health Drinks" class="w3-bar-item w3-button">Health Drinks</a>
  </div>

  <a href="adv_data.php#About"  class="w3-bar-item w3-button w3-padding">About</a>
  <form method="post" action="">
    		                <input type="submit" name="logout" value="Logout!">

              </form>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">GROCERY STORE</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">My Grocery</p>
    <p class="w3-right">
	      <i class="fa fa-shopping-cart w3-margin-right"><a href="cart.php">cart</a></i>
    </p>


  </header>

</div>
<script>
// Accordion
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>