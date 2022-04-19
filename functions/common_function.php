<?php

include('./includes/connect.php');

//getting  products
function getproducts(){
    global $con;
    //Condition to chech isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){

    $select_query="SELECT * FROM products ORDER BY rand() LIMIT 0,9 ";// selecting all the datas from products table
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

<div class='card'>
<img src='./admin_area/products_images/ $product_image1' class='card-img-top' alt=' $product_title'>
<div class='card-body'>
<h5 class='card-title'>  $product_title</h5>
<p class='card-text'>$product_description </p>
<p class='card-text'>Price: $product_price/- </p> 
<a href='mall.php?add_to_cart=$product_id'
 class='btn btn-info'>Add to cart</a>
<a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
</div>
</div>
</div> ";


   }
   
    }
}
}

//Getting all products
function get_all_products(){
  global $con;
  //Condition to chech isset or not
  if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){

 
     
  $select_query="SELECT * FROM products ORDER BY rand() LIMIT 0,9 ";// selecting all the datas from products table
  $result_query=mysqli_query($con,$select_query);
 //To fetch all the dtas from database
 while( $row= mysqli_fetch_assoc($result_query) ){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];

$product_image1=$row['product_image1'];
$product_image2=$row['product_image2'];
$product_image3=$row['product_image3'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo "<div class='col-md-4 mb-2'>
<!-- card for each product -->  
<div class='card'>
<img src='./admin_area/products_images/ $product_image1' class='card-img-top' alt=' $product_title'>
<div class='card-body'>
<h5 class='card-title'>  $product_title</h5>
<p class='card-text'>$product_description </p>
<p class='card-text'>Price: $product_price/- </p> 
<a href='mall.php?add_to_cart=$product_id'
 class='btn btn-info'>Add to cart</a>

<a href='product_details.php?product_id=$product_id' 
class='btn btn-secondary'>View more</a>
</div>
</div>
</div>
 ";


 }
 
  }
}

}
//getting unique categories
//displayoing brands
function get_unique_categories(){
    global $con;
    //Condition to chech isset or not
    if(isset($_GET['category'])){
    $category_id=$_GET['category'];

   
       
    $select_query="SELECT * FROM products WHERE category_id=$category_id ";// For a specific category
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
    }
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
<p class='card-text'>$product_description </p>
<p class='card-text'>Price: $product_price/- </p> 
<a href='mall.php?add_to_cart=$product_id'
 class='btn btn-info'>Add to cart</a>
<a href='product_details.php?product_id=$product_id' 
class='btn btn-secondary'>View more</a>
</div>
</div>
</div> ";


   }
   
    
}
}
// ERROR HERE!! Not SHOWING SPECIFIC BRANDS!!!

function get_unique_brands(){
    global $con;
    //Condition to chech isset or not
    if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
    $select_query="SELECT * FROM products WHERE brand_id= $brand_id ";// For a specific category
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    
    if($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>This brand is not available for service</h2>";
    }
  
   while( $row= mysqli_fetch_assoc($result_query)){
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
<p class='card-text'>$product_description </p>
<p class='card-text'>Price: $product_price/- </p> 
<a href='mall.php?add_to_cart=$product_id'
 class='btn btn-info'>Add to cart</a>
<a href='product_details.php?product_id=$product_id' 
class='btn btn-secondary'>View more</a>
</div>
</div>
</div> ";


   }
   
    
}
}


function getbrands(){
    global $con;
       
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
}

//displayoing catagories
function getcategories(){
    global $con;
    $select_categories="SELECT * FROM categories";  //to display all the Brand names to the side navbar
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title= $row_data['category_title'];
  $category_id= $row_data['category_id'];
  echo "<li class='nav-item '>
  <a href='mall.php?category=$category_id' class='nav-link text-light'>$category_title</a>
</li>";
}
}
//searching products by their keywords
function search_product(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
    $search_query="SELECT * FROM products  WHERE product_keywords
    like '%$search_data_value%'";
   // $select_query="SELECT * FROM products ORDER BY rand() lIMIT 0,9 ";// selecting all the datas from products table
    $result_query=mysqli_query($con,$search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>No Results matched</h2>";
  }
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
<p class='card-text'>$product_description </p>
<p class='card-text'>Price: $product_price/- </p> 
<a href='mall.php?add_to_cart=$product_id'
 class='btn btn-info'>Add to cart</a>
<a href='product_details.php?product_id=$product_id'
 class='btn btn-secondary'>View more</a>
</div>
</div>
</div> ";


   }
  }
    }


    //View details function
    function view_details(){
      global $con;
      //Condition to chech isset or not
      if(isset($_GET['product_id'])){
      if(!isset($_GET['category'])){
          if(!isset($_GET['brand'])){
  $product_id=$_GET['product_id'];
      $select_query="SELECT * FROM products WHERE product_id=$product_id ";// selecting all the datas from products table
      $result_query=mysqli_query($con,$select_query);
     
     while( $row= mysqli_fetch_assoc($result_query) ){
   $product_id=$row['product_id'];
   $product_title=$row['product_title'];
   $product_description=$row['product_description'];
  
   $product_image1=$row['product_image1'];
   $product_image2=$row['product_image2'];
   $product_image3=$row['product_image3'];
   $product_price=$row['product_price'];
   $category_id=$row['category_id'];
   $brand_id=$row['brand_id'];
   echo "<div class='col-md-4 mb-2'>
  
  <div class='card'>
  <img src='./admin_area/products_images/ $product_image1' class='card-img-top' alt=' $product_title'>
  <div class='card-body'>
  <h5 class='card-title'>  $product_title</h5>
  <p class='card-text'>$product_description </p>
  <p class='card-text'>Price: $product_price/- </p> 
  <a href='mall.php?add_to_cart=$product_id'
 class='btn btn-info'>Add to cart</a>
  <a href='mall.php' class='btn btn-secondary'>Go home</a>
  </div>
  </div>
  </div>


  <div class='col-md-8'>

  <div class='row'>
      <div class='col-md-12'>
          <h4 class='text-center text-info mb-5'>Related
               products</h4>
      </div>
      <div class='col-md-6'>
      <img src='./admin_area/products_images/ $product_image2' 
      class='card-img-top' alt=' $product_title'>
      </div>
      <div class='col-md-6'>
      <img src='./admin_area/products_images/ $product_image3' 
      class='card-img-top' alt=' $product_title'>
          
      </div>
  </div>
                
            </div>
  
  ";
  
  
     }
     
      }
    }

  }
}
//get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  

//Cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_add = getIPAddress();  
  $get_product_id=$_GET['add_to_cart'];
  
  $select_query="SELECT * FROM `cart_details` WHERE 
  ip_address='$get_ip_add' AND
  product_id=$get_product_id ";
  $result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows>0){
    echo "<script>alert('This item is already present in the cart')</script>";
    echo "<script>window.open('mall.php','_self')</script>";
}
else{
  $insert_query="INSERT INTO `cart_details` (product_id,ip_address,quantity)
  VALUES ($get_product_id,'$get_ip_add',0)";
    $result_query=mysqli_query($con,$insert_query);
    echo "<script>alert('Item is added to cart')</script>";
    echo "<script>window.open('mall.php','_self')</script>";
}
}
}

//Function to get number of items from the cart
function cart_item(){
  if(isset($_GET['add_to_cart'])){  //If this is set then i am counting the num ber of rows
    global $con;
    $get_ip_add = getIPAddress();  
    
    $select_query="SELECT * FROM `cart_details` WHERE 
                  ip_address='$get_ip_add'";
    
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }
  else{
    global $con;
    $get_ip_add = getIPAddress();  
    $select_query="SELECT * FROM `cart_details` WHERE 
                  ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }
  echo $count_cart_items;
  }


  //Total price function
  function total_cart_price(){
    global $con;
    $get_ip_add = getIPAddress(); 
    $total_price=0;
    $cart_query="SELECT * FROM cart_details WHERE ip_address= '$get_ip_add'";// Ther users will have different ip addresses.Based on the user login,ip address whatever cart that ip address is having that item is going to be fetched and only that items price is going to be added and displayed in the user

    $result=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
      $product_id=$row['product_id'];
      $select_products="SELECT * FROM products WHERE product_id='$product_id'";
      $result_products=mysqli_query($con,$select_products);
      while($row_product_price=mysqli_fetch_array($result_products)){
        $product_price=array($row_product_price['product_price']);//200,300
        $product_values=array_sum($product_price);//500
        $total_price+=$product_values;//50000
    }

  }
  echo $total_price;
}

?>