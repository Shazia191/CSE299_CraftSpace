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
  <title>CraftSpace</title>
  <!--Bootstrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--font awsome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--css link-->
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <!--Navbar-->
 <div class="container-fluid p-0">
   <!--first section-->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(212, 235, 236);">
    <div class="container-fluid">
      <img src="./images/logo2.jpg" alt="" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">login/signin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Chat\index.php">chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total Price: 100Tk</a>
          </li>
         
        </ul>
        <form class="d-flex" action="search_product.php" method="get">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
        </form>
      </div>
    </div>
  </nav>

<!--Second section-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(190, 234, 237);">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome... login as a guest</a>
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
<div class="row">
  <div class="col md-10 px-3">
    <!--products-->
    <div class="row">
      <!-- fetching products -->
      <?php
      search_product();
      get_unique_categories(); 
      get_unique_brands() 
      ?>  
      <!--row end-->
    </div> 
    <!-- col end -->
    </div>
  
  <div class="col-md-2 bg-light p-0"> 
    <!--brands to be displayed-->
     <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-secondary">
          <a href="#" class="nav-link text-light"><h4>Delivery Brands
          </h4></a>
        </li>
         <?php
            getbrands();
         ?>
    
    </ul>
    <!--catagories to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-secondary">
        <a href="#" class="nav-link text-light"><h4>Catagories</h4></a>
      </li>
      
      <?php
  getcategories();

?>
    </ul>
  </div>
  
</div>
  <!-- last section-->
 <div class="bg-secondary p-3 text-center">
  <p>All Right reserved © - designed by CraftSpace-2022</p>
</div> 
 </div>
  
 









  <!--bootstrap js link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html> 