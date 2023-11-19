<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src="/___vscode_livepreview_injected_script"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTU</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100, 100i, 400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap-campusonline.css" rel="stylesheet">
    <link href="css/ctu.css" rel="stylesheet" type="text/css">
    <style>
      body {
  background-image: url('bg5.jpg');
}

     h1 { 
  display: block;
  font-size: 3em;
  text-align: center;
  font-weight: bold;
  color: rgb(252, 251, 250);
}
.logo{
        width: 170px;
        cursor: pointer;
        margin-top: -3%;
        margin-left: 6%;
}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
  margin-top: 20px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}



/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #fd0cc8;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f50a80;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #000ced;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}


}
@keyframes slider{
  0%{ margin-top: -200px;}
  30%{ margin-top: -200px;}
  35%{ margin-top: 0px;}
  65%{ margin-top: 0px;}
  70%{ margin-top: 200px;}
  100%{ margin-top: 200px;}
}  
.slider-image {
        width: 100%;
      }
    </style>
    </head>
    <body data-new-gr-c-s-check-loaded="14.1038.0" data-gr-ext-installed="">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="fullfit_container">
          <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" aria-expanded="true" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand"><img src="../image/ctu-logo.jpg" alt="CTU"></a>
            </div>
            <div id="navbarCollapse" class="navbar-collapse collapse in" aria-expanded="true";>
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="student-home.php">Home</a></li>  
                    <li><a href="Timetable.html">Timetable</a></li>
                    <li><a href="Discussion.html">Discussion</a></li>
                    <li><a href="Share Resources.html">Share Resources</a></li>
                    <li><a href="Contact us.html">Contact us</a></li>
                    <li><a href="About.html">About</a></li>
                    
                </ul>        
            </div>
        </div>
    </nav>
    
    <div id="content_container">
    
    <div class="white-block">
            <br>
            <div class="title_green">Hello THERE!</div>	
    </div>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="ctupta.jpeg" alt="CTU Training Solutions Pretoria Campus" class="slider-image">
        <div class="text">CTU training solutions Pretoria Campus</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="ctubloom.jpeg" alt="CTU Training Solutions Bloemfontein Campus" class="slider-image">
        <div class="text" >CTU training solutions Bloemfontein Campus</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="ctuboksburg.jpeg" alt="CTU Training Solutions Boksburg Campus" class="slider-image">
        <div class="text">CTU training solutions Boksburg Campus</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="ctupotchefstroom - Copy.jpeg" alt="CTU Training Solutions Portchestroom Campus" class="slider-image">
        <div class="text">CTU training solutions Portchestroom Campus</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="ctustellenbosch.jpg" alt="CTU Training Solutions Stellenbosch Campus" class="slider-image">
        <div class="text">CTU training solutions Stellenbosch Campus</div>
      </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
    <div class="white-block">
        <div class="content_center"><div class="col-sm-12">
    <div class="col-md-6 col-sm-12">
    <p>
    <u><b>Exam permit and progress report download.   </b></u>
    <br><br>
    <a href="../image/VIDEO-2023-06-06-16-04-36.mp4" target="_blank">Click here</a> to learn how to download your exam permit and progress report. 
    </p>
    <p>
    <u><b>Boost Skills With MeasureUp Practice Tests At CTU Training Solutions!</b></u>
    <br><br>
    Start preparing with MeasureUp Practice Tests at CTU Training Solutions today!<br>
    Make your purchase here: <a href="https://ctutraining.ac.za/measureup/" target="_blank">https://ctutraining.ac.za/measureup/</a>
    </p>
    <!--
    <img src='../image/measureup.jpg' class='img-fluid' border=0>
    -->
    <img src="../image/sportsday_20231020.png" class="img-fluid" border="0">
    <br>
    <br>
    </div>
    <div class="col-md-6 col-sm-12">
    <p>
    <u><b>Introductions to 4IR Modules</b></u>
    </p>
    <p>
    <a href="../image/4IR How To and Digital Badge Tutorial.mp4" target="_blank"><b>4IR  and Digital Badges Tutorial</b></a>
    </p>
    <p>
    <br>
    <a href="https://ctublob.blob.core.windows.net/instructional-designs/2023/4IR/M1/content/index.html" target="_blank">Module 1 - Critical thinking</a><br>
    <a href="https://ctublob.blob.core.windows.net/instructional-designs/2023/4IR/M2/content/index.html" target="_blank">Module 2 - Creative expression</a><br>
    <a href="https://ctublob.blob.core.windows.net/instructional-designs/2023/4IR/M3/content/index.html" target="_blank">Module 3 - People relational skills</a><br>
    <a href="https://ctublob.blob.core.windows.net/instructional-designs/2023/4IR/M4/content/index.html" target="_blank">Module 4 - How to WoW others in the place of work</a><br>
    <br>
    <img src="../image/ctu_4ir.png" class="img-fluid" border="0">
    <br>
    <br>
    <br>
    </p>
    </div>
    </div></div>
    </div> 
    <div class="white-block">
        <br><br>
        <div class="content_center">The following assessments are due in 30 days</div> 
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col">Module</th>
                          <th scope="col">Assessment</th>
                          <th scope="col">Due</th>
                        </tr>
                    </thead>
                    <tbody>
                                        <tr>
                            <td valign="top">Core Web Development</td>
                            <td valign="top">PFCWD412_FA2</td>
                            <td valign="top">2023-09-15</td>
                        </tr>
                                        <tr>
                            <td valign="top">Robotic Development</td>
                            <td valign="top">PFRD412_FA2</td>
                            <td valign="top">2023-09-15</td>
                        </tr>
                                        <tr>
                            <td valign="top">Ethics and Network Architecture</td>
                            <td valign="top">PFENA412_FA2</td>
                            <td valign="top">2023-09-22</td>
                        </tr>
                                        <tr>
                            <td valign="top">Cloud Fundamentals</td>
                            <td valign="top">PFCF412_FA2</td>
                            <td valign="top">2023-09-25</td>
                        </tr>
                                    </tbody>
                </table>
                
    </div>
    
    
    <div id="footer">
        <div class="fullfit_container">
          <p class="footer-block">©2018 CampusOnline. All rights reserved.</p>
        </div>
    </div>
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/slider.js"></script>
    
    
    
    
    
    </div><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</body>
</html>