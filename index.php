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
<div class="flexslider" style="width: 50vh;">
  <ul class="slides" style="width: 50vh;">
    <li>
      <img src="images/1.jpg" style="width: 50vh;"/>
    </li>
    <li>
      <img src="images/2.jpg" style="width: 50vh;"/>
    </li>
    <li>
      <img src="images/3.jpg" style="width: 50vh;"/>
    </li>
  </ul>
</div>


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