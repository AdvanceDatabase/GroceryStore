<?php
                              


require 'vendor/autoload.php';

		$client = new MongoDB\Client();

		$project = $client->groceries;

		$crud = $project->sample;


		$result = $crud->find(

			[
				
                  
																																																																																																																																																																																																																																																																																																																																																																																																																																									],

			[
                
                $sort = array(['id' => 1]),
                

                                   
			   ]
		);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Cart</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
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
</head>


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
    <a href="home.php#Biscuits&Snacks" class="w3-bar-item w3-button">Biscuits & Snacks</a>
    <a href="home.php#Dry Fruits" class="w3-bar-item w3-button">Dry Fruits</a>
    <a href="home.php#Oil & Ghee" class="w3-bar-item w3-button">Oil & Ghee</a>
    <a href="home.php#Health Drinks" class="w3-bar-item w3-button">Health Drinks</a>
  </div>

  <a href="home.php#About"  class="w3-bar-item w3-button w3-padding">About</a>
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
    

  </header>
<div class="container">
	<h1 class="page-header text-center">My cart</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
						</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>

						<th>Id <th>	
							<th>Product name</th>
						<th>Price</th>
                        <th> Quantity </th>
						
					</thead>
					<tbody>
						<?php
							
							

							//use for MySQLi-OOP
							 foreach ($result as $res){
								echo "<tr>";

								echo  "<td>".$res['_id']."</td>";
								echo  "<td>".$res['product']."</td>";
								echo "<td>".$res['cost']."</td>";

								echo "<td>".$res['quantity']."</td>";
									

					          
							
							}

					
						?>
						



					</tbody>
				</table>

				
			</div>
		</div>
	</div>
</div>



<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>