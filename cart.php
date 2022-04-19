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
    <title>Cart details</title>
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


       <style>
  .cart_image{
  width:100px;
  height:80px;
  object-fit:contain;
}

</style>

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
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
              <?php  cart_item() ; ?></sup></a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </nav>
  <!--CALLING CART FUNCTION-->
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
  <h2 class="text-center">Hidden Store</h2>
  <p class="text-center">Showing the cart details</p>
</div>

 <!--Fourth section-->
 <div class="container">
     <div class="row">
         <form action="" method="post">
         <table class="table table-bordered text-center">
             <thead>
<tr>
    <th>Product title </th>
    <th>Product Image</th>
    <th>Quantity </th>
    <th>Total price </th>
    <th>Remove</th>
    <th colspan="2">Operations </th>
</tr>
    
</thead>
<tbody> 
    <!--PHP for displaying dynamic data -->
    <?php


   //global $con;
    $get_ip_add = getIPAddress(); 
    $total_price=0;
    $cart_query="SELECT * FROM cart_details WHERE ip_address= '$get_ip_add'";// Ther users will have different ip addresses.Based on the user login,ip address whatever cart that ip address is having that item is going to be fetched and only that items price is going to be added and displayed in the user

    $result=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
      $product_id=$row['product_id'];
      $select_products="SELECT * FROM products WHERE product_id='$product_id'";
      $result_products=mysqli_query($con,$select_products);
      while($row_product_price=mysqli_fetch_array($result_products)){
        $product_price=array($row_product_price['product_price']);
        $price_table=$row_product_price['product_price'];
        $product_title=$row_product_price['product_title'];
        $product_image1=$row_product_price['product_image1'];
        $product_values=array_sum($product_price);
        $total_price+=$product_values;
   
    ?>
    <tr>
        <td><?php echo $product_title  ?></td>
        <td><img src="./image/<?php echo $product_image1  ?>" alt="" 
         class="cart_image"></td>
        <td><input type="text" name="qty" class="form-input w-50"></td>
       
       
       <?php
$get_ip_add = getIPAddress(); 
if(isset($_POST['update_cart'])){
    $quantities=$_POST['qty'];
    $update_cart="UPDATE cart_details SET quantity=$quantities WHERE 
    ip_address='$get_ip_add'";
    $result_products_quantity=mysqli_query($con,$update_cart);
    $total_price=$total_price * $quantities;
}
        ?>
        <td><?php echo  $price_table  ?>/-</td>
        <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id  ?>"></td>
        <td >
          <!-- <button class="bg-info px-3 py-2 border-0 mx-3"> Update</button> -->
          <input type="submit" value="Update cart"
           class="bg-info px-3 py-2 border-0 mx-3" name="update_cart">
           <!--<button class="bg-info px-3 py-2 border-0 mx-3"> Remove</button>-->
           <input type="submit" value="Remove cart"
           class="bg-info px-3 py-2 border-0 mx-3" name="remove_cart">
        </td>
    </tr>

    <?php
      }}

    ?>
</tbody>

         </table>
         <!--Subtotal -->
         <div class="d-flex mb-5">
             <h4 class="px-3">Subtotal :<strong class="text-info">
                 <?php echo  $total_price  ?>/-</strong></h4>
             <a href="mall.php">
                 <button class="bg-info px-3 py-2 border-0 mx-3">Continue shopping</button></a>
             <a href="mall.php">
                 <button class="bg-secondary px-3 py-2 border-0 text-light">checkout</button></a>
         </div>
     </div>
 </div>
 </form>
  <!-- Function to remove item-->
  <?php
  function remove_cart_item(){
      global $con;
      if(isset($_POST['remove_cart'])){
          foreach($_POST['removeitem'] as $remove_id){
              echo $remove_id;
              $delete_query="DELETE FROM cart_details WHERE
              product_id=$remove_id";
              $run_delete=mysqli_query($con,$delete_query);
              if($run_delete){
                  echo "<script>window.open('cart.php','_self')</script>";
              }
          }
      }
  }
  echo $remove_item=remove_cart_item();
  ?>
 <?php
 include("./includes/footer.php")
 ?>
 </div>
 <!-- bootstrap JS link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
</body>
</html>