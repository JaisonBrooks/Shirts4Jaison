<?php 
$flavors = array("Vanilla", "Chocolate", "Strawberry", "Cookie Dough");
?>

<html><body>

	<p><?php echo "We have " . count($flavors) . " flavors availible. Here's a list: " . "\n"; ?></p>

	<?php foreach ($flavors as $flavor) { ?>
		<div><?php echo $flavor . "\n"; ?></div>
	<?php } ?>

</body></html>




<pre><?php 

echo "\n\n";

$countries = array();
$countries["US"] = "United States";
$countries["DE"] = "Germany";
echo "What country has the country code of " . "'DE' ?" . "\n";
echo $countries["DE"];

?></pre>


<?php


//Associative Array

$country = array(
	"code" => "US",
	"name" => "United States",
	"capital" => "Washington, D.C.",
	"population" => 225000000,
	);
 ?>
 <h1>Basic Arrays</h1>
 <h2><?php echo $country["name"];  ?></h2>
 <dl>
 	<dt>Code</dt>
 	<dd><?php echo $country["code"]; ?></dd>
 	<dt>Capital</dt>
 	<dd><?php echo $country["capital"]; ?></dd>
 	<dt>Population</dt>
 	<dd><?php echo $country["population"]; ?></dd>
 </dl>



 <pre><br><br></pre><?php
//Multi Deminsional Array's
$countries = array();
$countries[0] = array(
	"code" => "US",
	"name" => "United States",
	"capital" => "Washington, DC",
	"population" => 250000000
);
$countries[1] = array(
	"code" => "DE",
	"name" => "Germany",
	"capital" => "Berlin",
	"population" => 2500000
);

?>
<h1>Multi Deminsional Arrays</h1>
<?php foreach ($countries as $country) { ?>
<h2><?php echo $country["name"]; ?></h2>
<dl>
 	<dt>Code</dt>
 	<dd><?php echo $country["code"]; ?></dd>
 	<dt>Capital</dt>
 	<dd><?php echo $country["capital"]; ?></dd>
 	<dt>Population</dt>
 	<dd><?php echo $country["population"]; ?></dd>
 </dl>
<?php } ?> 





