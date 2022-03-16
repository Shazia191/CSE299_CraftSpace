<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Video</title>
    <style media="screen">
      body{
        padding: 0px;
        margin: 0px;
      }
      h1{
        background-color: teal;
        text-align: center;
        color: white;
        font-size: 48px;
        padding: 10px;
        margin-top: 0px;
      }
      ul{
        list-style-type: none;
      }
      li{
        float: left;
        margin-left: 15px;
        margin-top: 25px;
      }
      p{
        font-weight: bold;
        max-width: 380px;
        font-size: 18px;
        height: 30px;
      }
    </style>
  </head>
  <body>
    <h1>Video </h1>
    <div class="">
      <ul>
        <?php
         include 'db.php';

         $sql1="SELECT * from video";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>
           <li>
             <p><?php echo $info['title']; ?></p>
             <video src="video/<?php echo $info['video']; ?>"  width="380px"
                poster="thumbnail/<?php echo $info['thumbnail']; ?>" controls>

             </video>
           </li>

           <?php
         }


        ?>
      </ul>

    </div>

  </body>
</html>
