<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>    
</head>
<body>

<style>

/*
  The grid itself needs only 4 CSS declarations:
*/

.myGallery {
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fit, minmax(550px, 1fr));
}

.myGallery img {
  width: 100%;
}

/*
  And here are some declarations for the image caption.
  Just hover over one of the last 5 images to see it.
*/

.myGallery .item {
  position: relative;
  overflow: hidden;
}

.myGallery .item img {
  vertical-align: middle;
}

.myGallery .item:hover .caption {
  transform: translateY(0%);
}

/*
  The rest is only styling for this example page
*/


body {
  font: 400 1.5em/1.58 Vollkorn, serif;
}

h1,
p {
  text-align: center;
}

.myGallery {
  font-size: 1rem;
}


</style>


<h1>Image Grid</h1>
<p></p>
<div class="myGallery">
<?php
         
         $db = mysqli_connect("localhost","root","","img");
         $sql = "SELECT * FROM image_gallery ";
         $result = mysqli_query($db , $sql);
         while ($row = mysqli_fetch_array($result)){
             echo "<div  id ='img_div'>";
             echo "<img src = 'uploads/".$row['image']."'>";
            //  echo "<p>" .$row['title']."</p>";
             echo "</div>";
         }
 
         ?>
         


  