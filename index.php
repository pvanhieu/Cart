<?php 
	session_start();
	include_once "db.php";
	$db_handle = new DB();
	if(!empty($_GET["action"])){
		switch ($_GET["action"]) {
			case "add":
				if(!empty($_POST["quantity"])){
					$productByCode = $db_handle->runQuery("SELECT *  FROM products WHERE id='" .$_GET["id"]."'");
						$itemArr = array(
							$productByCode[0]["id"]=>array(
							'id' => $productByCode[0]["id"], //$_Get
							'name' => $productByCode[0]["name"],
							'quantity' => $_POST["quantity"],
							'date' => $productByCode[0]["date"]
							)
						);

						if(! empty($_SESSION["cart_item"])){
							if(in_array($productByCode[0]["id"], array_keys($_SESSION["cart_item"]))){
								foreach ($_SESSION["cart_item"] as $key => $value) {
									if($productByCode[0]["id"] == $key){
										if(empty($_SESSION["cart_item"][$key]["quantity"])){
											$_SESSION["cart_item"][$key]["quantity"]=0;
										}
										$_SESSION["cart_item"][$key]["quantity"]+=$_POST["quantity"];
									}
								}
							}else{
								$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArr);
							}
						}else{
							$_SESSION["cart_item"] = $itemArr;
						}
				}
				break;
				case "remove":
					if(!empty($_SESSION["cart_item"])){
						foreach ($_SESSION["cart_item"] as $key => $value) {
							if(($_GET["id"] == $key)!==false){
								unset($_SESSION["cart_item"][$key]);
							}
							if(empty($_SESSION["cart_item"])){
								unset($_SESSION["cart_item"]);
							}
						}
					}
					break;
				case "empty":
					unset($_SESSION["cart_item"]);
					break;
			default:
				// code...
				break;
		}
	}
 ?>

 <?php 
 $chucnang=1;
 if(isset($_GET['chucnang']))
 	$chucnang = $_GET['chucnang'];
 	 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="MyScript/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">

 </head>
 <body>
 	<div class="container">
 		<?php include_once "menu.php"; ?>
 		<?php 
 		include_once "cart.php";
 		if($chucnang ==1){
 			include_once "product.php";
 		}elseif($chucnang==2){
 			include_once "cart.php";
 		}
 		 ?>

 	</div>
 </body>
 </html>