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

</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>GROCERY STORE</b></h3>
  </div>

  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#Biscuits&Snacks" class="w3-bar-item w3-button">Biscuits & Snacks</a>
    <a href="#Dry Fruits" class="w3-bar-item w3-button">Dry Fruits</a>
    <a href="#Oil & Ghee" class="w3-bar-item w3-button">Oil & Ghee</a>
    <a href="#Health Drinks" class="w3-bar-item w3-button">Health Drinks</a>
  </div>

  <a href="#About"  class="w3-bar-item w3-button w3-padding">About</a>
   <form method="post" action="">
    		                <input type="submit"  class="w3-bar-item w3-button w3-padding" name="logout" value="Logout!">

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
    <p class="w3-left">Grocery Staples</p>
    <p class="w3-right">
	      <i class="fa fa-shopping-cart w3-margin-right"><a href="retrieve.php">cart</a></i>
    </p>

  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="store.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-hide-small">ALL U NEED IS HERE</h1>
      <p><a href="#Biscuits&Snacks" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="Biscuits&Snacks">
    <p>Biscuits & Snacks</p>
  </div>

  <!-- bisuits & snacks -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs1.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="CORN Flakes"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs2.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Cadbury Dairy Milk Home Treats Packet" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs3.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Kinder Joy Chocolate Lei Boys"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs4.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Parle Cookies Hide&Seek Choco Chip" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs5.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Cadbury 5 Star Home Treats"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs6.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Britannia Cream Biscuit Treat Bourbon" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
	
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs7.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Nestle Choco Kitkat Bag"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="bs8.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Oreo Cream Biscuit Sandwich Packet" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
  </div>


<div class="w3-container w3-text-grey" id="Dry Fruits">
    <p>Dry Fruits</p>
  </div>

  <!-- Dry Fruits -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df1.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Premium Harvest Groundnut"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df2.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Golden Harvest Fruit N Nut Premium Almonds" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df3.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Nature Choice Wet Dates Premium Packet"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df4.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Karmiq In Shell Pista Salted Packet" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df5.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Golden Harvest California Walnut Whole Packet"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df6.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Golden Harvest Fruit N Nut Kismis Indian" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
	
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df7.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Nature Choice Classique Dates"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="df8.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Karmiq Dried Figs Box" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
  </div>



<div class="w3-container w3-text-grey" id="Oil & Ghee">
    <p>Oil & Ghee</p>
  </div>

  <!-- Oil & Ghee -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og1.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Patanjali Cow Ghees Box"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og2.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Saffola Gold Saff & Ricebran Oil Packet" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og3.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Oleev Active Ricebran & Olive Oil Packet"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og4.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Fortune Health Rice Bran Oil Jar" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og5.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Fresh & Pure Sunflower Oil Packet"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og6.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Fresh Pure Soybean Oil Packet" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
	
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og7.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Patanjali Aarogya Mustard Oil Bottle"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="og8.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Garden of Life, Raw Extra Virgin Coconut Oil" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
  </div>




<div class="w3-container w3-text-grey" id="Health Drinks">
    <p>Health Drinks</p>
  </div>

  <!-- Health Drinks -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd1.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Horlicks Healthdrink Chocolate"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd2.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Bournvita Health Drink Packet" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd3.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Boost Brown Health Drink Refill"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd4.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Pediasure Complete Chocolate" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>

    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd5.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Complan Healthdrink Chocolate Refill"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd6.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Ensure Health Drink Chocolate Jar" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
	
    <div class="w3-col l3 s6">
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd7.jpg" style="width:100%">
</div>

	          <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Patanjali Herbal Power Vita Box"/> </p> </label>
<label>Cost: <input  name="cost" value ="$10.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="1">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
</div>




 
	      <div class="w3-container">
	        <div class="w3-display-container">
	          <img src="hd8.jpg" style="width:100%">
	          
	        </div>

	         <form action="add.php" method="POST">
<label>Product name:<input name="product" value ="Horlicks Junior 1-2-3 Chocolate Jar" /> </p> </label>
<label>Cost: <input  name="cost" value ="$20.50" /> </p> </label>
<label>Quantity: <select option="single" name="quantity">

<option value="1"> 1 </option>
<option value="2"> 2 </option>
</select>
</label>
<br>
<input type="hidden" name="id" value="2">
<button type = "submit"  name ="submit"> To Cart </button>
</form>
	      </div>
	  </div>
  </div>





  <!-- About -->
  <div class="w3-container w3-black w3-padding-32" id="About">
    <h1>About</h1>
    <p>Online Grocery Store makes your grocery shopping even simpler by bringing it to your door step. We offer you convenience of shopping everything that you need for your home. Discover new products and shop for all your food and grocery needs from the comfort of your home or office. </p>
  </div>


  <!-- End page content -->
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
