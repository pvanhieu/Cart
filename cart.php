
<div class="shopping-cart">
 		<div class="txt-heading">Shopping Cart</div>
 		<a href="index.php?action=empty" id="btnEmpty">Empty Cart</a>
 		<?php 
 		if(isset($_SESSION["cart_item"])){
 			$total_quantity=0;
 		 ?>
 		 <table class="tbl-cart" cellpadding="10" cellspacing="1">
 		 	<tbody>
 		 		<tr>
 		 			<th>ID</th>
 		 			<th>Name</th>
 		 			<th>Quantity</th>
 		 			<th>Date</th>
 		 			<th>Action</th>
 		 		</tr>
 		 		<?php 
 		 		foreach ($_SESSION["cart_item"] as $item) {
 		 		 ?>
 		 		<tr>
 		 			<td><?php echo $item["id"]; ?></td>
 		 			<td><?php echo $item["name"]; ?></td>
 		 			<td><?php echo $item["quantity"]; ?></td>
 		 			<td><?php echo $item["date"]; ?></td>
 		 			<td><a href="index.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction" > 
 		 				<img src="icon-delete.png" alt="Remove Item">
 		 			</a>
 		 			</td>
 		 		</tr>
 		 		<?php 
 		 		$total_quantity += $item["quantity"];
 		 		}
 		 		 ?>
 		 	</tbody>
 		 </table>
 		 <?php
 		}else{
 			?>
 			<div class="no-records">Your cart is empty</div>
 			<?php 
				}
 			 ?>
 	</div>