<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="main.js"></script>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Photo Shoppe</title>
     <link rel = "icon" href="logo.jpeg"
        type = "image/x-icon"> 
         <script type="text/javascript"
            src="//code.jquery.com/jquery-1.9.1.js">
  </script>
    <link rel="stylesheet" 
          type="text/css" 
          href="/css/result-light.css">
    
    <script type="text/javascript" 
            src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
  </script>
    <link rel="stylesheet" 
          type="text/css" 
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet"
          type="text/css" 
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- JavaScript for adding 
     slider for multiple images
     shown at once-->
    <script type="text/javascript">
        $(window).load(function() {
            $(".carousel .item").each(function() {
                var i = $(this).next();
                i.length || (i = $(this).siblings(":first")),
                  i.children(":first-child").clone().appendTo($(this));
                
                for (var n = 0; n < 4; n++)(i = i.next()).length ||
                  (i = $(this).siblings(":first")),
                  i.children(":first-child").clone().appendTo($(this))
            })
        });
    </script>

      <style>
          .panel {
  border: 1px solid ;
border-color: darkslategrey;
  border-radius:0;
  transition: box-shadow 0.5s;
}

.panel:hover {
  box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}

.panel-footer .btn:hover {
  border: 1px solid #f4511e;
  background-color: #fff !important;
  color: #f4511e;
}

.panel-heading {
  color: #fff !important;
  background-color:black!important;
  padding: 25px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;

}

.panel-footer {
  background-color: #fff !important;
}

.panel-footer h3 {
  font-size: 32px;
}

.panel-footer h4 {
  color: #aaa;
  font-size: 14px;
}

.panel-footer .btn {
  margin: 15px 0;
  background-color: #f4511e;
  color: #fff;
}
          
          body, html {
  height: 95.65%;
  margin: 0;
}
      .bg {
  /* The image used */
  background-image:url(p2.jpeg);

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
          .centre{
              text-align: center;
          }
          .pad{
              padding: 50px;
          }
          .underline{
              border-style:groove;
              box-shadow:
          }
          .back{
              background-color:gainsboro;
              
          }
          
          .margin{
              margin-top: 20px;
          }
          .pad2{
              padding-top:50px;;
          }
          footer {
  background-color:#2f2f2f;
  padding: 10px 0;
  text-align: center;
  
      ;
}
footer a {
  color: #70726F;
  font-size: 20px;
  padding: 10px;
 
  transition: all .5s ease;
}

footer a:hover {
  color: white;
}
        
      </style>
   
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="font-style: serif;">
      
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <a class="navbar-brand" href="#" style="font-size:40px" "font-family: Times New Roman"><strong>Digital Shoppe</strong></a>
  <ul class="navbar-nav">
      
    <li class="nav-item active">
      <a class="nav-link" href="#Home"><strong>HOME</strong></a>
    </li>
    <br><br>
    <li class="nav-item">
      <a class="nav-link" href="#About" style="color: white"><strong>ABOUT US</strong></a>
    </li>
    <br><br>
      <li class="nav-item">
      <a class="nav-link" href="#Education" style="color: white"><strong>SERVICES</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php" style="color: white"><strong>CONTACT US</strong></a>
    </li>   
  </ul>
</nav>
      <div class="bg" id="Home">
      <h1 class="centre pad2" style="color:beige" "font-family: Times New Roman" "color: white"><b> "Digital Shoppe, a leading Album Designing & Photo Retouching Company."</b></h1>
     
<h1 class="centre" style="color:beige" "font-family: Times New Roman" "color: white"><b>We provide
    
    <span style="color: yellow" "font-family: Times New Roman" 
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "Album Designing.", "High end picture retouching- Pre wedding to Photo Retouching."]'></span> </b> 
</h1>
      
      </div>
      
      <div class="container pad" id="About">
  <div class="row">
    <div class="col-sm-4">
<img src="amul.jpeg" class="img-thumbnail" alt="Cinque Terre" width="95%" height="85%">     
      </div>
    <div class="col-sm-8">
      <h1 style="font-family: Times New Roman"><strong>ABOUT CEO</strong></h1>
      <h4 style="font-family: Times New Roman" "color: black"><b>Amulak Singh has an experience of 8 years in the field of photography. He started Digital Shoppe in January 2019 with nothing but a goal in his mind. He wanted to cater to all services in the field of photography and ease the life of photographers, having struggled as a freelance photographer himself. He aims to cater the photographers across the Globe in an expansive fashion. He has always followed the principle of helping others and adding value to photographer’s lives and with the service we provide.</b>
</h4>      
        
    </div>
  </div>
</div>
    
      <div class="back" id="Inrroduction">
       <div class="container pad">
  <div class="row">
    <div class="col-sm-8">
      
        <h1 style="font-family: Times New Roman"><strong>INTRODUCTION</strong></h1>
        <h4 style="font-family: Times New Roman" "color: black"><b>Digital Shoppe offers album designing and photo retouching services to photographers. It is an innovative work-driven company, using contemporary media to change the world of photography. We ease the lives of photographers and assist them in delivering quality work to their clientele. Our prerogative is to collect raw data from photographers and deliver them final products in the form of albums and edited pictures. We are a one-stop shop for the photographers struggling to deliver videos and pictures to their clients on time due to workload in peak months or otherwise.
        
        The magic of photographs and moments is that the though people might change, the circumstance might change, but the smile and happiness captured in the pictures leaves an indelible impact on our minds. We encapsulate the feelings, piece together a product that perfectly describes the alchemy of those perfectly synced heartbeats. We assure timely and quality products those blend with the photographer’s state of mind.</b></h4>
      
     </div>
      <div class="col-sm-4">
        <img src= "chp.png" width="400" height="340">
      
      
    </div>
      
           </div>
          </div>
      </div>
        

    
      <div id="Education">
       <div class="container pad">
  <div class="row">
      <div class="col-sm-4">
        <img src="intro.jpeg " width="300" height="300">   
    </div>
    <div class="col-sm-8">
        <h1 style="font-family: Times New Roman"><strong>AIM & MISSION</strong></h1>
        <h4 style="font-family: Times New Roman" "color: black"><b>
          Our goal is to deliver quality albums and edited photos to photographers and getting it right in the first time. We aim to deliver our products on time targeting to reduce the average delivery time of albums from photographers to their clientele. Our mission is to bridge the gap between the stuck payments of photographers due to lack of time and availability. By offering album & photo editing services delivered on time matching the taste of photographer, we plan to expand our market and reach out to photographers across Globe helping them deliver the end products on time.

          Digital Shoppe provides a partner to each client through the process of understanding and delivering the
          products of their liking and choice. We guarantee to deliver end products within 4-5 business days.</b>
        </h4>
     </div>
    
  </div>
</div>
<div class="container" style="font-family: Times New Roman" "color: black">
  <h1><strong>Previous Work Show...</strong></h1>
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-xs-2">
                        <video controls width="720" height="350">
                        <source src="vid1.mp4" type="video/mp4">
                        <source src="vid1.webm" type="video/webm">
                        <p>Video for sample...</p>
                        <div style="border: 1px solid black ; padding: 8px ;"></div>
                        </video>
                        <p style="color: black" "size: 450px"><b>Video for sample...</b></p>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-2">
                        <video controls width="720" height="350">
                        <source src="vid2.mp4" type="video/mp4">
                        <source src="vid2.webm" type="video/webm">                      
                        <p>Video for sample...</p>
                        <div style="border: 1px solid black ; padding: 8px ;">
                        
                        </div>
                        </video>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-2">
                        <video controls width="720" height="350">
                        <source src="vid3.mp4" type="video/mp4">
                        <source src="vid3.webm" type="video/webm">
                        <p>Video for sample...</p>
                        <div style="border: 1px solid black ; padding: 8px ;">
                    
                        </div>
                        </video>
                    </div>
                </div>
            </div> 
            <a class="left carousel-control"
                      href="#myCarousel"
                      data-slide="prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
            </a>
            <a class="right carousel-control" 
               href="#myCarousel" 
               data-slide="next">
              <i class="glyphicon glyphicon-chevron-right">
              </i>
            </a>
  
        </div>
    </div>          
</div>
      <div class="back" style="font-family: Times New Roman">
      
      <div class="container pad" id="Skills">
  <div class="text-center">
    <h1><strong>We provide Services...</strong></h1>
    <h4></h4>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1 style="color: black" ><bold><strong>SERVICES</strong></bold></h1>
        </div>
        <div class="panel-body pad" style="font-family: Times New Roman" "color: black" "size:40px">
          <h4><strong><bold>Album Designing</bold></strong> </h4>
          <h4><strong><bold>High End Picture Editing - Pre-Wedding , Wedding</bold></strong> </h4>
          <h4><strong><bold>High End Picture Editing - Product , Jewellery, Model</bold></strong> </h4>
        </div>
        
      </div>
    </div>
      
    
   <div class="col-sm-6" style="font-family: Times New Roman">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1 style="color: black "><bold><strong>CONTACT US</strong></bold></h1>
        </div>
        <div class="panel-body pad" style="font-family: Times New Roman" "color: black">
          <h4><strong><bold>Hours of Operation - 9AM-9PM</bold></strong> </h4>
          <h4><strong><bold>Location - Sector 30, Gurgaon 122001</bold></strong> </h4>
          <h4><strong><bold>Contact us - 9711716323</bold></strong> </h4>
          <h4><strong><bold>digitalshoppe21@gmail.com</bold></strong></h4>
        </div>
        
      </div>
    </div>
  </div>
</div>
  </div>
      
          
      
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<footer id="contact">
  <a href="https://www.facebook.com/profile.php?id=100031151460334" target="_blank"><i class="fa fa-facebook fa-1x"></i></a>
  <a href="https://www.linkedin.com/in/kumari-sakshi-gupta-4157991a4/" target="_blank"><i class="fa fa-linkedin fa-1x"></i></a>
  <a href="https://github.com/SeeitsSakshi" target="_blank"><i class="fa fa-github fa-1x" target="_blank"></i></a>
  <a href="https://instagram.com/digitalshoppe21?igshid=11964siwhzv5a" target="_blank"><i class="fa fa-instagram fa-1x"></i></a>
  <a href="mailto:digitalshoppe21@gmail.com" target="_blank"><i class="fa fa-envelope fa-1x"></i></a>
  <a href="contact.php" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></i></a>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>