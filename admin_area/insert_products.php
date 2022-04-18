<!-- bootstrap JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
<?php
   include('../includes/connect.php'); 
   if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';
    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    //Accessing image tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //checking empty condition
    if($product_title=='' or $description=='' or $product_keywords==''  or  $product_category=='' or  $product_brands=='' or $product_price==''
    or $product_image1=='' or $product_image2=='' or $product_image3=='')
    
    {
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();

        }
        else
        {
       move_uploaded_file($temp_image1,"./products_images/$product_image1") ;
       move_uploaded_file($temp_image2,"./products_images/$product_image2") ;
       move_uploaded_file($temp_image3,"./products_images/$product_image3") ;

        //insert query
        $insert_products="INSERT INTO `products`(product_title,product_description,product_keywords,
         category_id,brand_id,product_image1,product_image2,product_image3,product_price,
         date,status) VALUES ('$product_title','$description', '$product_keywords',' $product_category','$product_brands',' $product_image1',' $product_image2',
         '$product_image3',' $product_price',NOW(),'$product_status')";
        }
          $result_query=mysqli_query($con,$insert_products);
          if($result_query)
          {
              echo "<script>alert('Successfully inserted product')</script>";
         }
        }
   ?>
   
     
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin </title>
      <!-- bootstrap css link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">
     <!-- bootstrap JS link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
      <!-- font awesome link -->
      <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
       <!-- css link -->
       <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-light">
   <div class="container mt-3">
       <h1 class="text-center">Insert Products</h1>
       <!--Product Form-->
       <form action="" method="post" enctype="multipart/form-data">
             <!--Product title-->
             <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_title" class="form-label">Product Title</label>
               <input type="text" name="product_title" id="product_title"
               class="form-control"
               placeholder="Enter product title" autocomplete="off"
               required="required">

           </div>
            <!--Product Description-->
            <div class="form-outline mb-4 w-50 m-auto">
               <label for="description" class="form-label">Product Description</label>
               <input type="text" name="description" id="description"
               class="form-control"
               placeholder="Enter product description" autocomplete="off"
               required="required">

           </div>

               <!--Product Keywords-->
               <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_keywords" class="form-label">Product Keywords</label>
               <input type="text" name="product_keywords" id="product_keywords"
               class="form-control"
               placeholder="Enter product keywords" autocomplete="off"
               required="required">

               </div>
                              <!--Categories-->
                              <div class="form-outline mb-4 w-50 m-auto">
                                  <select  name="product_category" id=""
                                  class="form-select">
                                  <option value="">Select a category</option>

                                  <?php
                                    $select_query="SELECT * FROM categories ";
                                    $result_query=mysqli_query($con,$select_query);
                                    while($row=mysqli_fetch_assoc($result_query)){
                                        $category_title=$row['category_title'];
                                        $category_id=$row['category_id'];
                                        echo   " <option value='$category_id'>$category_title</option>";
                                        

                                    }
                                  ?>
                                 <!-- <option value="">Category 1</option>
                                  <option value="">Category 2</option>
                                  <option value="">Category 3</option>
                                  <option value="">Category 4</option> -->
                          </select>

               </div>
                <!--Brands-->
                <div class="form-outline mb-4 w-50 m-auto">
                                  <select  name="product_brands" id=""
                                  class="form-select">
                                  <option value="">Select a Brand</option>
                                  
                                  <?php
                                    $select_query="SELECT * FROM brands ";
                                    $result_query=mysqli_query($con,$select_query);
                                    while($row=mysqli_fetch_assoc($result_query)){
                                        $brand_title=$row['brand_title'];
                                        $brand_id=$row['brand_id'];
                                        echo   " <option value='$brand_id'>$brand_title</option>";
                                        

                                    }
                                  ?>
                          </select>

               </div>
                <!--Image 1-->
                <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_image1" class="form-label">Product Image 1</label>
               <input type="file" name="product_image1" id="product_image1"
               class="form-control"
              
               required="required">

               </div>
                 <!--Image 2-->
                 <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_image2" class="form-label">Product Image 2</label>
               <input type="file" name="product_image2" id="product_image2"
               class="form-control"
              
               required="required">

               </div>
                 <!--Image 3-->
                 <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_image3" class="form-label">Product Image 3</label>
               <input type="file" name="product_image3" id="product_image3"
               class="form-control"
              
               required="required">

               </div>

                <!--Product Price-->
                <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_price" class="form-label">Product price</label>
               <input type="text" name="product_price" id="product_price"
               class="form-control"
               placeholder="Enter product price" autocomplete="off"
               required="required">

               </div>
                <!--Product Price-->
                <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" 
               value="Insert Products">


               </div>
         </form>
       </div>

    
</body>
</html>