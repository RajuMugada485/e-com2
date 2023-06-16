<!DOCTYPE html>
<html>
<head>
  <title>Product List</title>
  <link rel="stylesheet" href="prostyle.css">
</head>
<body>
  <div class="product-list">
  <?php
    // connect to the database
    $db = new mysqli('localhost', 'root', '', 'MyDB1');
    
    // check for connection errors
    if ($db->connect_error) {
      echo "Failed to connect to database: " . $db->connect_error;
      exit();
    }
    
    // retrieve products from the database
    $query = "SELECT * FROM Product";
    $result = $db->query($query);
    
    // check for query errors
    if (!$result) {
      echo "Failed to retrieve products: " . $db->error;
      exit();
    }
    
    // display the products in a table
    echo "<table>";
    echo "<tr><th>Name</th><th>Price</th><th>Image</th></tr>";
    while ($row = $result->fetch_assoc()) {
      #$image_url="mysore.jpg";
      echo "<tr>";
      #echo "<td><img src='" . $row['image_url'] . "' width='100'></td>";
      echo "<td>" . $row['product_name'] . "</td>";
      #echo "<td>" . $row['description'] . "</td>";
      echo "<td>" . $row['cost_of_product'] . "</td>";
      echo "<td><img src='img/" . $row['product_img'] . "' width='100'></td>";
      echo "</tr>";
    }
    echo "</table>";
    //echo "<img src="C:\xampp\htdocs\mysore.jpg"  width="50" height="50">";
    // close the database connection
    $db->close();
  ?>
  </div>
</body>
</html>