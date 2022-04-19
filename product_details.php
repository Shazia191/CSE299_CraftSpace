<!--Connecting file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CraftSpace Mall</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">
     <!-- bootstrap JS link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
      <!--font awsome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
       <!-- css link -->
       <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<!--Navbar-->
<div class="container-fluid p-0">
   <!--first section-->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(212, 235, 236);">
    <div class="container-fluid">
      <img src="./css/logo2.jpg" alt="" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="mall.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="display_all.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login/Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Chat\index.php">Chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php  cart_item() ; ?></sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?>/-</a>
          </li>
         
        </ul>
        <form class="d-flex" action="search_product.php" method="get">
          <input class="form-control me-2" type="search"
           placeholder="Search" aria-label="Search" name="search_data">
         <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
         <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">;
        </form>
      </div>
    </div>
  </nav>
<!--Calling Cart function-->
  <?php
   cart();
  ?>
<!--Second section-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(190, 234, 237);">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome!... Login as a guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">login</a>
    </li>
  </ul>
</nav>
<!--third section-->
<div class="bg-light">
  <h2 class="text-center">CraftSpace</h2>
  <p class="text-center">For your all DIY solution</p>
</div>

 <!--fourth section-->
<div class="row px-3">
     <!-- 10 columns for products -->  
    <div class="col-md-10">
       <!-- Products --> 
       <div class="row">
          
            
          
<?php

//getproducts();
view_details();
get_unique_categories();

get_unique_brands();


?>
      
  
       </div>  

    </div>
 <!-- 2 columns for side nav --> 
  <!-- sidenav -->
<div class="col-md-2 bg-secondary p-0">
    <!-- Brands to be displayed --> 
    <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>
</li>


<?php
getbrands();
?>

</ul>
<!--Catagories to be displayed --> 
<ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Catagories</h4></a>
</li>
<?php
getcategories();
?>


</ul>
 </div> 
 </div> 
 </div>
 <?php
 include("./includes/footer.php")
 ?>
  <!-- last section
 <div class="bg-primary p-3 text-center">
  <p>All Right reserved © - designed by CraftSpace-2022</p>
</div> -->
 </div>
 
</body>
</html>