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
  <br><br><br> <br><br>
<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav d-flex nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Main Meals</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Swallows</a>
					</div>
					
				</div>
				</div>

<div class="container-fluid bg-light">
	<div class="col-md-12">
		<div class="row">
<!-- <div class="tab-content" id="v-pills-tabContent">
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> -->

			<div class="col-md-7">
				<div class="p-2" style="background: #d65106;">
				<h2 class="text-center">FOOD MENU</h2>
				
				</div>
				<div class="col-md-12">
					<div class="row">
				
				
<?php
$query = "SELECT * FROM  food_menu";
    
$statement = $conn -> prepare($query);
$statement->execute();
$result = $statement->fetchAll();
if($result && $statement->rowCount()>0){
    foreach($result as $row){
		?>
	<div class="col-md-4">
        <form action="myorder.php?id=<?php echo $row['id']; ?>" method="POST">
		<img class="img-fluid" src="images/<?php echo $row['image']?>" style="height:150px; width:100%;">
		<h3 class="gallery-single fix text-center"><?php echo $row['name']; ?></h3>
		<h3 class="gallery-single fix text-center">₦<?php echo number_format($row['price'],2); ?><br></h3>
		<input type="hidden" name="name" value="<?php echo $row['name'];?>">
		<input type="hidden" name="price"  class="fix" value="<?php echo $row['price'];?>">
		<input type="number" name="quantity" value="1" class="form-control" size="2">
		<center>
		<button class="btn  mx-2 my-2" style="background: #d65106;" name="add_to_order"><i class="bi bi-cart3"></i></button>
	</center>
		</form>
		</div>
<?php }}


?>
		
	</div>
		</div>
					</div>
				
		

			
<div class="col-md-5">
			<div class="p-2" style="background: #d65106;">
				<h2 class="text-center">ITEM SELECTED</h2>
	</div>
				<?php

$total = "0";
				
$menu = "";

$menu .= "
<table class='table table-striped table-hover table-bordered'>
<tr>
<th>ID</th> 
<th>Item</th> 
<th>Price</th> 
<th>Qty</th> 
<th>Total</th>
<th>Action</th>
</tr>
</table>

";

if(!empty($_SESSION['order'])){
	foreach ($_SESSION['order'] as $key => $value){

		$menu .= "
		<table class='table table-striped table-bordered'>
<tr>
<td>".$value['id']."</td> 
<td>".$value['name']."</td> 
<td>".$value['price']."</td>
<td>".$value['quantity']."</td> 
<td>₦" .number_format($value['price'],2)* $value['quantity']."</td>
<td>
<a href='myorder.php?action=remove&id=" .$value['id']."'>
<button class='btn' style='border:none;'><i class='bi bi-trash3'></i></button>
</a>
</td>
</tr>
</table>
		";


$total = $total + $value['price'] * $value['quantity'];

	}

    $menu .="
     <table class='table table-striped'>
    <tr>
	<td></td> 
    <td>Total price</td> 
    <td>₦".$total."</td> 
    <td>
	<a href='myorder.php?action=clearall'>
	<button name='delete' class='btn btn-warning'>clear</button>
    </a>
    </td>
</tr>
<td>
<a href='confirm.php?action=confirm'>
<button class='btn btn-warning'>Confirm Order</button>
</a>
</td>	
</table>
    
    ";

}


echo $menu;

if(isset($_GET['action'])){

	if($_GET['action'] == "clearall"){
		unset($_SESSION['order']);
	}

	if($_GET['action'] == "remove"){
		foreach ($_SESSION['order'] as $key => $value){
			if ($value['id'] == $_GET['id']){
				unset($_SESSION['order'][$key]);
			}
		}
		
	}
}
	


	
	
	?>
	
		   </div>


		   </div>

			</div>
