<!--Connecting file-->
<?php
include('includes/connect.php');





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
       <!-- css link -->
       <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class=bg-light>
    <h1 class="text-center">Welcome to Craftspace Mall!</h1>
   
</div>
<div class="row px-3">
     <!-- 10 columns for products -->  
    <div class="col-md-10">
       <!-- Products --> 
       <div class="row">
       <!-- Fetching Products --> 
       <?php
       
       $select_query="SELECT * FROM products order by rand() ";// selecting all the datas from products table
       $result_query=mysqli_query($con,$select_query);
      //To fetch all the dtas from database
      while( $row= mysqli_fetch_assoc($result_query) ){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
  
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    echo "<div class='col-md-4 mb-2'>
    <!-- card for each product -->  
  <div class='card'>
<img src='./admin_area/products_images/ $product_image1' class='card-img-top' alt=' $product_title'>
<div class='card-body'>
<h5 class='card-title'>  $product_title</h5>
<p class='card-text'>$product_description.</p>
<a href='#' class='btn btn-info'>Add to cart</a>
<a href='#' class='btn btn-secondary'>View more</a>
</div>
</div>
  </div> ";
   

      }
      

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
$select_brands="SELECT * FROM brands";  //to display all the Brand names to the side navbar
$result_brands=mysqli_query($con,$select_brands);

//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title= $row_data['brand_title'];
  $brand_id= $row_data['brand_id'];
  echo "<li class='nav-item '>
  <a href='mall.php?brand=$brand_title' class='nav-link text-light'>$brand_title</a>
</li>";
}
?>

</ul>
<!--Catagories to be displayed --> 
<ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Catagories</h4></a>
</li>
<?php
$select_categories="SELECT * FROM categories";  //to display all the Brand names to the side navbar
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title= $row_data['category_title'];
  $category_id= $row_data['category_id'];
  echo "<li class='nav-item '>
  <a href='mall.php?category=$category_id' class='nav-link text-light'>$category_title</a>
</li>";
}
?>


</ul>
 </div> 
 </div> 
</body>
</html>