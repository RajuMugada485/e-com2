<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> 
          SNstore | Ecommerce website.com
        </title>
    </head>
    <body>
        <div class="background-image">
          <div class="container">
            <div class="navbar">
               <nav id="nav1">
                     <ul>
                         <li id="nani"><a href="">Home</a></li>
                         <li><a href="payment page.html">Payment</a></li>
                         <li><a href="contactus.html">contact us</a></li>
                         <li><a href="login and signup.html">Login/Signup</a></li>
                         <li><a href="ownersignup.html">shopkeeper Login/Signup</a></li>
                     </ul>
                 </nav> 
                 <img src="images/cart.png" width="30px" height="30px">
           </div>
           <div class="row">
             
            <div class="col-2">
            <h1>Give Your Workout<br>A New Style!</h1> 
            <p>Success isn't always about greatness.It's about consistency.consistent <br>hard work gains success.Greatness will come.</p> 
            <a href="" class="btn">Explore Now &#8594;</a> 
            </div>
           </div>
         </div>
        </div>
         <style>
             *{
                 margin: 0;
                 padding: 0;
             }
             .background-image{
                background-image: url(images/main.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                height: 100vh;
             }
         </style>
        <!-----featured categories------->
           <div class="categories">
               <div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
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

        // display the products in a grid
        while ($row = $result->fetch_assoc()) {
            echo "<div class=\"col-4\">";
            echo "<a href='singleproduct1.php?id=".$row['product_id']."'>";

            echo "<img src='i/" . $row['product_img'] . "' width='100'>";
            echo "<button class=\"add-to-cart-btn\">Add to Cart</button>";
             echo "<a href='payment page.php?id=" . $row['product_id'] . "' class='add-to-cart-btn'>Buy Now</a>";

            echo "<h4>" . $row['product_name'] . "</h4>";
            echo "<div class=\"rating\">";
            echo "<i class=\"fa fa-star\"></i>";
            echo "<i class=\"fa fa-star\"></i>";
            echo "<i class=\"fa fa-star\"></i>";
            echo "<i class=\"fa fa-star\"></i>";
            echo "<i class=\"fa fa-star\"></i>";
            echo "</div>";
            echo "<p>" . $row['cost_of_product'] . "</p>";
            echo "</div>";
            
        }

        $db->close();
        ?>
    </div>
</div>
<!-- css for add to cart button -->
<style>

.add-to-cart-btn {
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    border: none; /* No border */
    padding: 10px 20px; /* Some padding */
    font-size: 16px; /* Increase font size */
    cursor: pointer; /* Change mouse pointer on hover */
}

/* Change background color on hover */
.add-to-cart-btn:hover {
    background-color: #3e8e41;
}

</style>

<!-- css for products -->

<style>
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.col-4 {
    flex: 25%;
    max-width: 25%;
    padding: 0 10px;
}

.col-4 img {
    width: 100%;
    height: auto;
}

.rating {
    color: #ff9800;
    font-size: 16px;
}
</style>
<!-----Offer------->

<div class="offer">
  <div class="small-container">
    <div class="row">
      <div class="col-2">
        <img src="gro.png" alt="Grocery" class="offer-img animated">   
      </div>
      <div class="col-2">
        <p>Exclusively Available on RedStore</p>
        <h3>Grocery</h3>
        <h6>a store that primarily retails a general range of food products,<br> which may be fresh or packaged.</h6>
        <a href="#" class="btn">Buy Now &#8594;</a>
      </div>
    </div>
  </div>
</div>
<!-- css for offers -->
<style type="text/css">
    .offer {
  background-color: #f9f9f9;
  padding: 20px;
  margin: 20px 0;
  border-radius: 10px;
}

.small-container {
  max-width: 1200px;
  margin: 0 auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}

.col-2 {
  flex-basis: 50%;
  text-align: center;
}

.offer-img {
  max-width: 100%;
}
/*for image*/

.offer-img {
  max-width: 100%;
  transition: all 0.3s ease-in-out;
}

.offer-img:hover,
.offer-img:active {
  transform: scaleX(-1);
}
/*for buttton*/
.btn {
  display: inline-block;
  background-color: #ff5c5c;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  transition: all 0.3s ease-in-out;
}

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
}

.btn:active {
  transform: translateY(1px);
  box-shadow: none;
}

</style>
              

   <!------------- testimonial ---------->
   <div class="testimonial">
       <div class="small-container">
           <div class="row">
               <div class="col-3">
                   <i class="fa fa-quote-left"></i>
                   <p>Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry. Lorem<br> Ipsum has been the industry's standard<br> dummy text ever </p>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                </div>
                <img src="p1.png">
                <h3>sean parker</h3>
               </div>
               <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry. Lorem <br>Ipsum has been the industry's standard<br> dummy text ever </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
             </div>
             <img src="p2.png">
             <h3>Mike smith</h3>
           </div>
           <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry. Lorem <br>Ipsum has been the industry's standard <br>dummy text ever </p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
         </div>
         <img src="p3.png">
         <h3>Mobal joo</h3>
       </div>
   </div>
   <!---------- brands ----------->
   <div class="brands">
       <div class="small container">
           <div class="row">
               <div class="col-7">
                   <img src="brand1.png">
               </div>
               <div class="col-7">
                <img src="brand2.png">
            </div>
            <div class="col-7">
                <img src="brand3.png">
            </div>
            <div class="col-7">
                <img src="brand4.png">
            </div>
            <div class="col-7">
                <img src="brand5.png">
            </div>
            <div class="col-7">
                <img src="brand6.png">
            </div>
           </div>
       </div>
   </div>
               
    </body>
</html>