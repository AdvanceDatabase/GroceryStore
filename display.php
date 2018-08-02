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


$cost = $_GET['cost'];
echo $cost;
$quantity = $_POST['quantity'];
$totalcost= $cost*$quantity;

echo '$totalcost';


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation using PHP/MySQLi with DataTable and PDF Generator using TCPDF</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
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
<body>
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
                        <th> Cost Per Item </th>
						
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
									

					            echo "<td>".$res['totalcost']."</td>";

							
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