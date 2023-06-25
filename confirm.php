
<?php
//header

 session_start();
 include "include/header.php";
 include "connection/connection.php";


 if(isset($_POST['add_to_order'])){
	if(isset($_SESSION['order'])){
	   $session_array_id = array_column($_SESSION['order'], 'id');

	   if(!in_array($_GET['id'], $session_array_id)){
		   $session_array = array(
			   'id' => $_GET['id'],
			   'name' => $_POST['name'],
			   'price' => $_POST['price'],
			   'quantity' => $_POST['quantity']
				 );
	   
			$_SESSION['order'][] = $session_array;
			}
	   
	   

   }
   else{
	   
	   $session_array = array(
	   'id' => $_GET['id'],
	   'name' => $_POST['name'],
	   'price' => $_POST['price'],
	   'quantity' => $_POST['quantity']
		   );

	$_SESSION['order'][] = $session_array;
	}



   }

 
 
  ?>

<br><br>
<a href="myorder.php">
<button class="btn btn-light">back to Menu</button>
</a>

<div class="container-fluid p-5">

    <center>
		
	<div class="col-md-3">
		<div class="row">
        <div class="col-md-12" style="position:sticky;">
        <div class=" card p-2" style="box-shadow: 0px  0px 10px;">
		<center>
		<img src="images/logo2.png" alt="" />
</center>
		<h5><code  style="font-size:18px; color:black;">RIVERPLATE GARDEN, OPPOSITE ABIA HOUSE CENTRAL AREA, CENTRAL BUSINESS DISTRICT, ABUJA</code><h4>
			<p>P/N: <code style="font-size:18px; color:black;">09027142590</code></p>

				
<hr>
				<?php

$total = "0";
				
$menu = "";

// $menu .= "

// <ul class='d-flex' style='justify-content:space-between;'>
// <li>Quantity</li> 
// <li>Item</li> 

// <li>Total Price</li>
// </ul>


// ";

if(!empty($_SESSION['order'])){
	foreach ($_SESSION['order'] as $key => $value){

		$menu .= "
	
<ul class='d-flex' style=' justify-content:space-between;'>
<li><code style='font-size:18px; color:black;'>".$value['quantity']."</code></li>  
<li><code style='font-size:18px; color:black;'>".$value['name']."</code></li> 
<li><code style='font-size:18px; color:black;'>₦" .number_format($value['price'] * $value['quantity'])."</code></li>
</ul>
		";


$total = $total + $value['price'] * $value['quantity'];

	}

    $menu .="
	<br>
    <ul class='d-flex' style='justify-content:space-evenly;'> 
    <li><code style='font-size:18px; color:black;'<b>Total price:</b></code></li> 
    <li><code style='font-size:18px; color:black;'<b>₦".$total."</b></code></li> 
	
</ul>

<hr>
    
    ";

    

}



if(isset($_GET['action'])){

	if($_GET['action'] == "remove"){
		unset($_SESSION['order']);
	}

	
}
	

echo $menu;

;


	
	
	?>
<center><code style="color:black; font-size:18px;">Thank you for coming by, Sure you enjoy your food</code></center>
<hr>

		   </center>

			</div>
		</div>
	</div>
</div>
</div>		
		
<?php
$query = "SELECT * FROM food_menu";
    
$statement = $conn -> prepare($query);
$statement->execute();
$result = $statement->fetchAll();
if($result && $statement->rowCount()>0){
    foreach($result as $row){
		?>
	<div class="col-md-4">
        <form action="confirm.php?id=<?php echo $row['id']; ?>" method="POST">
		<input type="hidden" name="name" value="<?php echo $row['name'];?>">
		<input type="hidden" name="price" value="<?php echo $row['price'];?>">		
		</form>
		</div>
<?php }}


?>
		
			
		

<div class="card">
	<h4>Hello World</h4>
</div>