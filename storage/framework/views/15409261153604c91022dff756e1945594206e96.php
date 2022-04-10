<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logopic.jpg" type="image/jpg" sizes="20x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <title>MJ Eats</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

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
                        <a href="index.html" class="logo">
                            <img class="logo" src="assets/images/eatspic.jpg" >
                            <a href="" class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 

                            <li class="scroll-to-section">
                                <?php if(auth()->guard()->check()): ?>

                                <a href="<?php echo e(url('/showcart', Auth::user()->id)); ?>">
                                    <i class="fa-solid fa-cart-shopping"></i>Cart[<?php echo e($count); ?>]
                                </a>
                                <?php endif; ?>
                            
                                
                            
                            </li> 
                            <li>

                                <?php if(Route::has('login')): ?>
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    <?php if(auth()->guard()->check()): ?>
                                        <li><?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
                                        </li>
                                    <?php else: ?>
                                      <li>  <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                
                                        <?php if(Route::has('register')): ?>
                                            <li><a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            </li>

                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section id=1>
        <div class="banner">
        <div class="load"></div>
         <span class="note"><bold>Explore the new varieties of dishes and fast foods <br/> with exciting offers from our MJ | Eats</bold></span>.
         <div class="main-white-button scroll-to-section">
            <a href="#reservation">Make A Reservation</a>
        </div>
        </div>
      </section>
    <!-- ***** Main Banner Area Start ***** -->
   
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>MJ Eats is one of the best Restaurant located in our country India which was combined with Multi-Cuisine foods and top most chefs from world wide.<br/><br/> MJ Eats also provides home delivery reaches to ur hands on time with fresh and well heated temperature and makes your stomach feel happy.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href=""></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
   
    <?php echo $__env->make("food", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <?php echo $__env->make("foodchef", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
       <?php echo $__env->make("reservation", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <center>
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6> Hey! It's MJ Eats Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Snacks</a></a></li>
                                          <li><a href='#tabs-4'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/idli.jpg"  height="100" width="100" alt="">
                                                            <h4>Idli</h4>
                                                            <p>Smoothie Idlis from tamil nadu cuisine with sambar</p>
                                                            <div class="price">
                                                                <h6>Rs.35</h6>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/vada.jpg" height="100" width="100"  alt="">
                                                            <h4>Vada</h4>
                                                            <p>Vada as Gari  from tamil nadu cuisine with sambar</p>
                                                            <div class="price">
                                                                <h6>Rs.50</h6>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/dosa.jpg"  height="100" width="100" alt="">
                                                            <h4>Mysore Dosa</h4>
                                                            <p>Famous Mysore dosa with multiple chutneys</p>
                                                            <div class="price">
                                                                <h6>Rs.70</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/poori.jpg"  height="100" width="100" alt="">
                                                            <h4>Poori</h4>
                                                            <p>Wheat ingredient based poori with a combo of aloo curry!!</p>
                                                            <div class="price">
                                                                <h6>Rs.60</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/bonda.jpg"  height="100" width="100" alt="">
                                                            <h4>Mysore Bonda</h4>
                                                            <p>Bonda is having a different taste with different chutney and sambar</p>
                                                            <div class="price">
                                                                <h6>Rs.70</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/tea.jpg" height="100" width="100" alt="">
                                                            <h4>Chai</h4>
                                                            <p>Chai also called as Tea which is a medicine and mind relief</p>
                                                            <div class="price">
                                                                <h6>Rs.20</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/meals.jpg" height="100" width="100" alt="">
                                                            <h4>Meals</h4>
                                                            <p>Indian Meals is like complete feeling with all indian famous items</p>
                                                            <div class="price">
                                                                <h6>Rs.120</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/fried.jpg" height="100" width="100" alt="">
                                                            <h4>Fried Rice</h4>
                                                            <p>Fried Rice is Chinese cuisine with amazing paneer curry	</p>
                                                            <div class="price">
                                                                <h6>Rs.200</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/chick.jpg" height="100" width="100" alt="">
                                                            <h4>Chicken Biryani</h4>
                                                            <p>Spicy Hyderbadi Specal Biryani never bores u instead excites u</p>
                                                            <div class="price">
                                                                <h6>Rs.260</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/pb.jpg" height="100" width="100" alt="">
                                                            <h4>Paneer Biryani</h4>
                                                            <p>Special Paneer Biryani with Raita</p>
                                                            <div class="price">
                                                                <h6>Rs.240</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/mb.jpg" height="100" width="100" alt="">
                                                            <h4>Mutton Biryani</h4>
                                                            <p>Mutton Biryani with Mutton Kheema curry</p>
                                                            <div class="price">
                                                                <h6>Rs.340</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/red.jpg"height="100" width="100" alt="">
                                                            <h4>Schezwan Chicken Fried Rice</h4>
                                                            <p>Schezwan Chicken Fried Rice gonna be too spicy</p>
                                                            <div class="price">
                                                                <h6>Rs.380</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/burger.jpg" height="100" width="100" alt="">
                                                            <h4>Burger</h4>
                                                            <p>its chesse well stufffed Burger Cravings!! time</p>
                                                            <div class="price">
                                                                <h6>Rs.150</h6> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/rainbow1.jpg"height="100" width="100" alt="">
                                                            <h4>Rainbow Cake</h4>
                                                            <p>	Sweet & Delicious Rainbow multi Color Flavoured Cake</p>
                                                            <div class="price">
                                                            <p></p>
                                                                <h6>Rs.90</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/grilled-cheese-sandwiches-RU197054.jpg" height="100" width="100" alt="">
                                                            <h4>Cheese Sandwich</h4>
                                                            <p>Come and experience the Cheese Sandwich</p>
                                                            <div class="price">
                                                                <h6>Rs.120</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/red Velvet Cake.jpg" height="100" width="100"alt="">
                                                            <h4>Red Velvet Cake</h4>
                                                            <p>Red Velvet Cake with White Cream</p>
                                                            <div class="price">
                                                                <h6>Rs.120</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/coffee.jpg"height="100" width="100" alt="">
                                                            <h4>Cappuccino </h4>
                                                            <p>Cappuccino vibes never ends</p>
                                                            <div class="price">
                                                                <h6>Rs.280</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/veg-momos-recipe-672x372.jpg" height="100" width="100" alt="">
                                                            <h4>Fried Momos </h4>
                                                            <p>Momos is kinda dumpling extracted from Tibet cuisine</p>
                                                            <div class="price">
                                                                <h6>Rs.230</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                
                                <article id='tabs-4'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/alooo.jpg" height="100" width="100" alt="">
                                                            <h4>Aloo Paratha</h4>
                                                            <p>Aloo paratha is a punjabi dish</p>
                                                            <div class="price">
                                                                <h6>Rs.40</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/naan.jpg"height="100" width="100" alt="">
                                                            <h4>Butter Naan & Butter Chicken	</h4>
                                                            <p>Butter Naan & Butter chicken is an unforgettable combo	</p>
                                                            <div class="price">
                                                                <h6>Rs.400</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/fulka-roti-500x500.jpg" height="100" width="100" alt="">
                                                            <h4>Pulka With Paneer Curry</h4>
                                                            <p>Dhaba Style with paneer and kaju curry</p>
                                                            <div class="price">
                                                                <h6>Rs.160</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/omlete.jpg" height="100" width="100" alt="">
                                                            <h4>Omlette</h4>
                                                            <p>Cheesy fluffy Omlette</p>
                                                            <div class="price">
                                                                <h6>Rs.35</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/salted-lassi.jpg"  height="100" width="100"alt="">
                                                            <h4>Lassi</h4>
                                                            <p> Salted Lassi is a punjabi refreshment juice</p>
                                                            <div class="price">
                                                                <h6>Rs.70</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/foodimage/curd.jpg" height="100" width="100"alt="">
                                                            <h4>Curd Rice</h4>
                                                            <p>Curd Rice with Pomegranate toppings</p>
                                                            <div class="price">
                                                                <h6>Rs.60</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>    
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </center>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/eatspic.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>MJ Eats-Foods
                        
                        <br>Developer: Jaithra Mandavilli</p>
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
</html><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/home.blade.php ENDPATH**/ ?>