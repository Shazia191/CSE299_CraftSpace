<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Video</title>
    <style media="screen">
      body{
        padding:0px;
        margin:0px;
      }
      h1{
        background-color: teal;
        text-align: center;
        color: white;
        padding: 8px;
        font-size: 48px;
      }
      div{
        border: 2px solid black;
        width: 650px;
        margin-left: 400px;
        padding-left: 10px;
        padding-bottom: 20px;
      }
      h2{
        text-align: center;
        text-decoration: underline;
      }
      #title{
        width: 600px;
        padding: 10px;
        font-size: 17px;
        border: 2px solid black;
        margin-top: 10px;
      }
      label{
        font-size: 20px;
        font-weight: bold;
      }
      #uploadbutton{
        margin-left: 270px;
        font-size: 19px;
        font-weight: bold;
        padding: 5px;
        width: 100px;
      }
      #description{
        border: 2px solid black;
        width: 600px;
        margin-top: 10px;
      }
      input[type=file]{
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    <h1>Video </h1>
    <div class="">
      <h2>Upload Your Video</h2>
      <form class="" action="video.php" method="post" enctype="multipart/form-data">
        <label for="">Title</label><br>
        <input id="title" type="text" name="title" value="" placeholder="Enter Video Title" required><br><br>
        <label for="">Video Description</label><br>
        <textarea id="description" name="description" rows="8" cols="80" placeholder="Enter Video Description" required></textarea><br><br>
        <label for="">Upload Thumbnail</label>
        <input type="file" name="thumbnail" value="" required><br><br>
        <label for="">Upload Video</label>
        <input type="file" name="video" value="" required><br><br>
        <input id="uploadbutton" type="submit" name="upload" value="Upload">

      </form>

    </div>
    <?php
    include 'db.php';
    if (isset($_POST['upload'])) {
      $title=$_POST['title'];
      $description=$_POST['description'];

      $thumbnail=$_FILES['thumbnail']['name'];
      $thumbnail_type=$_FILES['thumbnail']['type'];
      $thumbnail_size=$_FILES['thumbnail']['size'];
      $thumbnail_temp_loc=$_FILES['thumbnail']['tmp_name'];
      $thumbnail_store="thumbnail/".$thumbnail;
      move_uploaded_file($thumbnail_temp_loc,$thumbnail_store);

      $video=$_FILES['video']['name'];
      $video_type=$_FILES['video']['type'];
      $video_size=$_FILES['video']['size'];
      $video_temp_loc=$_FILES['video']['tmp_name'];
      $video_store="video/".$video;
      move_uploaded_file($video_temp_loc,$video_store);

      $sql="INSERT INTO video(title,description,thumbnail,video)
      values('$title','$description','$thumbnail','$video')";

      $query=mysqli_query($conn,$sql);



    }

     ?>

  </body>
</html>