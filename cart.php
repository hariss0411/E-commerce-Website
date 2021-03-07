<?php
	include "common.php";
		if (!isset($_SESSION['email'])) { 
		header('location: login.php');
	}
?>	
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css"/>
   
    <title>Cart</title>
  </head>
  <body>
  <?php
		include "header.php";
		$user_id=$_SESSION['id'];
		$product_query="select items.id,name,price from items inner join users_items ON items.id = users_items.item_id where users_items.user_id='$user_id' AND status='Added to cart';";
		$product_result= mysqli_query($con, $product_query) or die(mysqli_error($con));
		?>
		 <p>&nbsp;</p>
		 <br><br>
		<div class="container">
      <table   class="table table-striped">
                <tbody>
				<tr><th>Item Number </th> <th>Item Name </th> <th>Price </th><th> </th></tr>
				<?php	
					if(mysqli_num_rows($product_result) == 0){ 
				?>
				<tr><td>Add items to the cart first</td></tr>
				<?php
					} else { 
							$sums=0;
							while($row=mysqli_fetch_array($product_result)){
								
								$sums = $sums+$row["price"]; 
								
				?>
				<tr><td><?php echo $row["id"]; ?></td><td><?php  echo $row["name"];?></td><td><?php echo $row["price"]; ?></td><td> <a href="cart-remove.php?id= <?php echo $row["id"]?>" class='remove_item_link'> Remove</a></td></tr>
				 
					<?php } ?>
					<tr><td></td> <td>Total</td> <td>Rs <?php echo $sums; ?>/-</td><td><a href="success.php"> <button type="submit" name="submit" class="btn btn-primary ">Confirm Order</button></a></td></tr>		
					<?php } ?>
                    
                   
           </tbody>
       </table>
    </div>
		<?php
		include "footer.php";
		?>
	</body>
</html>