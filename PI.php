<!DOCTYPE html>
<html>
<head>
<style>
#D1 {
  background-color: white;
  width: 1550px;
  height: 1500px;
  margin: auto;

}

#D2 {
  width: 1550px;
  background-color: yellow;
  height: 170px;
  position: absolute;

}
#D3 {
width: 350px;
height: 170px;
background-color: green;
position: absolute;
right: 0px;
}
#D4 {
width: 387.5px;
height: 47px;
background-color: black;
position: absolute;
top: 178px;
}
#D5 {
width: 387.5px;
height: 47px;
background-color: red;
position: absolute;
top: 178px;
right: 16.5px;
}
#D6 {
width: 387.5px;
height: 47px;
background-color: blue;
position: absolute;
top: 178px;
right: 404.4px;
}
#D7 {
width: 387.5px;
height: 47px;
background-color: pink;
position: absolute;
top: 178px;
right: 792px;
}


#B1{
  background-color: grey;

}

#C1 {
  max-width: 800px;
  max-height: 400px;
  float: left;
  padding-top: 350px;


}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Document</title>

</head>
<body id="B1">
     <div id="D1">

       <div id="D2">
         <div id="D3">
            <p> </p>
         </div>
       </div>

      <div id="D4">

      </div>
      <div id="D5">

      </div>
      <div id="D6">

      </div>
      <div id="D7">

      </div>

      <div class="container" id="C1" >
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="la.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>

      <div class="item">
        <img src="ny.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






     </div>



</body>
</html>