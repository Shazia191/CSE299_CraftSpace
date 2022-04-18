<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard </title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">
      <!-- font awesome link -->
      <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
     <!-- css link -->
      <link rel="stylesheet" href="../css/style.css">
      <style>
          .admin_image{
              margin-left:20px;
             padding:20px;
         width: 100px;
         object-fit:contain;
}
.footer{
    position:absolute;
    bottom:0;

}


      </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
       <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/admin.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guests!</a>
                      </li>
                   </ul>
                </nav>
            </div>
        </nav>
        <!-- Second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>

        </div>
         <!-- Third child -->
         <div class="row">
             <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                 
                 
                 <div>
                     <a href="#"><img src="../image/fe.png" alt="" class="admin_image"></a>
                     <p class="text-light text-center">Admin name</p>
                 </div>
                 <div class="button text-center">
                     <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
                     <button class="my-3"><a href="insert_products.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
                    
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
          
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    
                    <button><a href="" class="nav-link text-light bg-info my-1">LogOut</a></button>
                    <button><a href="index.php?video_uploader" class="nav-link text-light bg-info my-1">Video Uploader</a></button>

                 </div>

             </div>
         </div>
 <!-- Fourth child -->
<div class="container my-3">
    <?php
 
if(isset($_GET['video_uploader'])){
    include('../index.html');
}
    ?>
</div>
    
    <!-- Footer-->
    <div class="bg-info p-3 text-center footer">
        <p>All rights reserved  -2022</p>
    </div>
    </div>
     <!-- bootstrap JS link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
    
</body>
</html>