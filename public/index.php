<?php
    require __DIR__. '/../src/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP forma">
    <title>Focal</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0b2526b029.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <script>
        function myFunction() {
            var x = document.getElementById("mMenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <header>
        <div class="container hero">
        <h1>Web & Graphic Designer</h1> <a href="#">Learn More</a>
            <div class="hero_marker">
                <span class="active"></span>
                <span></span>
                <span></span>
                </div>
        </div>
    </header>
    <section class="navbar">
        <div class="container1 flex-container">
            <div class="logo">
                <img src="../images/focal_logo_03-compressor.png" alt="focal">
            </div>
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Resume</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact me</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container"> 
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
    </section>
    <section class="container1 val flex-container">    
        <div class="values">
            <h2>Values</h2>
            <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
        </div>
        <div class="Goals">
            <h2>Goals</h2>
            <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
        </div>
        <div class="Hobbies">
            <h2>Hobbies</h2>
            <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
        </div>
    </section>
    <section class="container2 about flex-container">
        <div class="left">
            <img src="../images/focal_photo2_05-compressor.jpg" alt="focal2">
        </div>
        <div class="right  ">
            <h2>About me</h2>
            <p class="lor">Lorem ipsum dolor sit amet,ea dorning epicuri udicabit nam, te usu virtuale placerat. Purto bruto disputando cu est, eam sicam sclura ei. Vel dicam accusata ei, cum ne periculis molestiae pri</p>
            <p class="lor">Lorem ipsum dolor sit amet,ea dorning epicuri udicabit nam, te usu virtuale placerat. Purto bruto disputando cu est, eam sicam sclura ei.</p>
                <div class="webonl flex-container ">
                    <div class="icons flex-container">
                        <img src="../images/11icon_07.png" alt="focal7">
                        <div class="top">
                        <h3>Web Design</h3>
                        <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                    </div>
                </div>
                    <div class="icons2 flex-container">
                        <img src="../images/12icon_03.png" alt="focal3">
                            <div class="button">
                                <h3>Graphic Design</h3>
                                <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                            </div>
                    </div>
                </div>
                    <div class="Grapseo  flex-container">
                        <div class="icons flex-container">
                            <img src="../images/13icon_03.png" alt="focal13">
                                <div class="top">
                                    <h3>Online Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                                </div>
                        </div>
                            <div class="icons2 flex-container">
                                <img src="../images/14icon_03.png" alt="focal14" >
                                <div class="button">
                                    <h3>Online Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.</p>
                                </div>
                            </div>
                    </div>
                </div>
    </section>
    <section class="container10"> 
        <div class="skills">
        <h3>My Skills</h3>
        <div>
          <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.</p>
          <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei.</p><a href="#">Contact me</a>
        </div>
        <ul>
          <li>
            <h4>Photoshop</h4>
            <div><span style="width:90%">90%</span></div>
          </li>
          <li>
            <h4>Illustrator</h4>
            <div><span style="width:80%">80%</span></div>
          </li>
          <li>
            <h4>Html / Css</h4>
            <div><span style="width:90%">90%</span></div>
          </li>
          <li>
            <h4>PHP / Mysql</h4>
            <div><span style="width:70%">70%</span></div>
          </li>
        </ul>
        </div>
    </section>
    <section class="resume" >
      <div class="main_resume">
        <div class="main_resume_download">
          <h3>Resume</h3>
          <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p><a href="#">Download Resume</a>
        </div>
        <div class="main_resume_web">
            <h3>My Education</h3>
          <div>
            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.</p>
            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu ests.</p>
          </div>
          <ul>
            <li>
              <h4>Graphic Design Diploma</h4><span>Reeves College <span>/ June 2008 - May 2010</span></span>
              <div>4.0 GPA</div>
              <hr>
              <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei.</p>
            </li>
            <li>
              <h4>Cit Diploma</h4><span>Lethbridge College<span>/ June 2006 - May 2008</span></span>
              <div>4.0 GPA</div>
              <hr>
              <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei.</p>
            </li>
          </ul>
             <hr class="hi">
        </div>
        <div class="main_resume_web2">
          <h3>Work experiance</h3>
          <div>
            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.</p>
            <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
          </div>
          <ul>
            <li>
              <h4>Lead Web designer</h4><span>Reeves College <span>/ June 2008 - May 2010</span></span>
              <div>3 Years</div>
              <hr>
              <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei.</p>
            </li>
            <li>
              <h4>Junior Designer</h4><span>Lethbridge College<span>/ June 2006 - May 2008</span></span>
              <div>1 Years</div>
              <hr>
              <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei.</p>
            </li>
            <li>
              <h4>Web Developer</h4><span>Lethbridge College<span>/ June 2006 - May 2008</span></span>
              <div>1 Years</div>
              <hr>
              <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei.</p>
            </li>
          </ul>
          </div>
        </div>
    </section>
    <section class="john" >
    <div class="container7">
        <p class="top">"Lorem ipsum dolor sit amet,ea doming epicuri iudicabitt nam, te usu virtute placerat. Purto brute<p class="main"> disputando cu est,eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne priculis molestiae </p><p class="botton">pri.Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam."</p> 
        <h3>John Stone</h3>
         <div class="john_marker">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>
    </div>
    </section>
    <section class="portfolio">
    <div class="container8">
        <h3>Portfolio</h3>
        <p class="top">Lorem ipsum dolor sit, ea doming epicuri udicabit nam, te usu virtute placerat. Purtobrute disputando cu est, eam dicam</p><p class="button"> soluta ei. vel dicam vivendo accusata ei, cum ne periculis molestiae pri.</p>
        <div class="rows  ">
            <div class="row1 flex-container  ">
                <div class="first">
                    <img src="../images/focal-iconback_03.png" alt="back">
                        <div class="second">
                            <img src ="../images/focal-icon4_19-compressor.png" alt="icons4">
                        </div>
                        <div class="last">
                            <img src ="../images/focal-icon7_27-compressor.png" alt="icons7">
                        </div>
                </div>
            <div class="row2 ">
                <div class="first">
                    <img src="../images/focal-icon2_12-compressor.png" alt="icons2">
                        <div class="second">
                            <img src ="../images/focal-icon5_21-compressor.png" alt="icons5">
                        </div>
                        <div class="last">
                            <img src ="../images/focal-icon8_28-compressor.png"  alt="icons8">
                        </div>
                </div>
            </div>
             <div class="row3 ">
                <div class="first">
                    <img src="../images/focal-icon03.2_03-compressor.png"  alt="icons3">
                        <div class="second">
                            <img src ="../images/focal-icon6_22-compressor.png"  alt="icons6">
                        </div>
                        <div class="last">
                            <img src ="../images/focal-icon9_29-compressor.png"  alt="icons9">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="contact">
        <div class="forms flex-container">
        <div><h3>Contact me</h3>
        
          <p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei.</p>
            
          <div>
            <p>122 33d Street East</p>
            <p>Saskatoon, SK</p>
            <p>S7K 1R9</p>
          </div><p>Email:
            <span>info@focal.com</span></p><p>Phone:
            <span class="p2">1-305-222-2323</span></p>
        </div>
        <form id="contact" action="index.php" method="post">
          <label for="name">Name<span>*</span></label>
          <input type="text" name="name" required> 
          <label for="email">Email Address<span>*</span></label>
          <input type="email" name="email" required>
          <label for="message">Message<span>*</span></label>
          <textarea name="message" required></textarea>
          <input name= "submit" type="submit" id="contact-submit" value="CONTACT ME">
        </form>
      </div>
    </section>
    <footer class="footer">
        `<div class="cantainer6 foot">
            <p class="copyright">Copyright 2014 Focal - Built With Passion</p>
            <div class="footer-nav">
                <ul class="flex-container">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fas fa-basketball-ball"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
