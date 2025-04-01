<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area of a Triangle in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anastasiia Lebedenko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area of a Triangle in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area of a Triangle in PHP</h1>";
			echo "<h3>This website will help you calculate the area of a triangle.</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBase">Base (mm):</label>
      <input type="text" id="base" placeholder="Enter the base (mm)" name="base"><br><br>
      <label for="lblHeight">Height (mm):</label>
      <input type="text" id="height" placeholder="Enter the height (mm)" name="height"><br><br>
      <input type="submit" value="Calculate Area">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The area of the triangle is  " + $area + cm<sup>2</sup>
	    </iframe>
	</body>
</html>