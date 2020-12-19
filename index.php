<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="flexslider.css">
    <title>Document</title>
</head>
<body>
<h1>Hope</h1>
<?php
    function resize_image($file, $w, $h, $crop=FALSE) {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width-($width*abs($r-$w/$h)));
            } else {
                $height = ceil($height-($height*abs($r-$w/$h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w/$h > $r) {
                $newwidth = $h*$r;
                $newheight = $h;
            } else {
                $newheight = $w/$r;
                $newwidth = $w;
            }
        }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    
        return $dst;
    }
?>

<!-- <div class="flexslider" >
  <ul class="slides" >
    <li>
      <img src="images/1.jpg" />
    </li>
    <li>
      <img src="images/2.jpg" />
    </li>
    <li>
      <img src="images/3.jpg" />
    </li>
  </ul>
</div> -->
<div class="flexslider" >
  <ul class="slides" >
    <li>
      <img src="<?php imagescale(imagecreatefromjpeg('images/1.jpg') , 500, 400);  ?>" />
    </li>
    <li>
      <img src="<?php imagescale(imagecreatefromjpeg('images/2.jpg') , 500, 400);  ?>" />
    </li>
    <li>
      <img src="<?php imagescale(imagecreatefromjpeg('images/3.jpg') , 500, 400);  ?>" />
    </li>
  </ul>
</div>
<?php resize_image('images/1.jpg', 200, 200); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.flexslider-min.js"></script>
<script>
    $(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide"
    });
    });
</script>
</body>
</html>