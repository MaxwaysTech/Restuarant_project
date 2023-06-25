<?php 
session_start();

if(isset($_POST['order_1'])){
    if(isset($_SESSION['order'])){
        $session_array_a = array_column($_SESSION['order']);

        if(!array($_GET['price'], $session_array_a)){
            
    $quantity =$_POST['quantity'];
    $price =$_POST['price'];

$session_array = array(
        'quantity' =>$_POST['quantity'],
        'price' =>$_POST['price']
);

$_SESSION['order'][] = $session_array;


        }
    }

    $quantity =$_POST['quantity'];
    $price =$_POST['price'];

$session_array = array(
        'quantity' =>$_POST['quantity'],
        'price' =>$_POST['price']
);

$_SESSION['order'][] = $session_array;

$price = $quantity * $price;

echo "
<ul class='d-flex' style='justify-content:space-between;'>
<li>Item</li>
<li>Quantity</li>
<li>Price</li>
</ul>
";



if(!empty($_SESSION['order'])){
    foreach ($_SESSION['order'] as $key => $value) {
        echo "<div>
        <ul class='d-flex' style='justify-content:space-between;'>
        <li>Jollof-Rice</li>
        <li>".$quantity."</li>
        <li>".$price."</li>
       </ul>
          </div>
          "; 
    }
}

   
   
   
      exit();
     
    }
                                            
                                            








?>
       