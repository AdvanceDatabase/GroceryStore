 <?php

		require 'vendor/autoload.php';

				$client = new MongoDB\Client();

				$project = $client->groceries;

				$crud = $project->sample;




				if(isset($_POST['submit']))
				{
                  //echo $_POST['quantity'];

				$document = array( 'product' => $_POST['product'],'cost' => $_POST['cost'] ,'id' => $_POST['id'],'quantity' => $_POST['quantity']);



			       $project->sample->insertOne($document);
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

<a href="retrieve.php "> view your orders </a>

</html>


