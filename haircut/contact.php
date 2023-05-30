<?php 

$link = mysqli_connect('127.0.0.1:3306','root','','haircut');


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>HairCut - contact</title>


    <!-- Additional CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo1.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Главная</a></li>
                            <li class="scroll-to-section"><a href="#explore">О нас</a></li>
                            <li class="scroll-to-section"><a href="#men">Католог</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Оставить заявку</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="section-heading">
                        <h2>Say Hello. Don't Be Shy!</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                    <div class="section-heading">
                        <h2>Онлайн запись на приём в парикмахерскую</h2>
                    </div>
                <div class="col-lg-12">
                    <form id="contact" action="zapis.php" method="post">
                        <div class="row">
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="Lastname" type="text" id="name" placeholder="Фамилия" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="Firstname" type="text" id="name" placeholder="Имя" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input name="phone" type="phone" id="phone" placeholder="Телефон" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input name="email" type="email" id="email" placeholder="E-mail">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input name="date" type="date" id="date" placeholder="Выберите день" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input name="time" type="time" id="time" placeholder="Выберите время" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button">Перейти к оплате</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->

   <!-- ***** Footer Start ***** -->
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo1.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">haircut@company.com</a></li>
                            <li><a href="#">+7 (452) 453-64-42</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Стрижки</h4>
                    <ul>
                        <li><a href="#">Мужские</a></li>
                        <li><a href="#">Женские</a></li>
                        <li><a href="#">Детские</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Меню</h4>
                    <ul>
                        <li><a href="#">Католог</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Цены</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Помощь и информация</h4>
                    <ul>
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#">Вопросы</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>HairCut ©2023.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
