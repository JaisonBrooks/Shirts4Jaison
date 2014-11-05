<?php include("products.php"); 

$pageTitle = "Shirt Catalog";
$section = "shirts";

include("include/header.php"); ?>
	
	<div class="section shirts page">

		<div class="wrapper">

			<h1>Mike's full catelog of Shirts</hr>

				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo "<li>";
							echo '<a href="shirt.php?id=' . $product_id . '">';
							echo '<img src="' .  $product["img"] . '" alt="' . $product["name"] . '">';
							echo "<p>View Details</p>";
							echo "</a>";
							echo "</li>"; 
						} 
					?>
				</ul>
		</div>
		
	</div>


<?php include("include/footer.php"); ?>