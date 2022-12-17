<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> inventory-groco </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">catalog</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <!-- <div class="fas fa-user" id="login-btn"></div> -->
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">₹90/-</span>
                <span class="quantity">qty : 1 piece</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">₹40/-</span>
                <span class="quantity">qty : 1 kg</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">₹200/-</span>
                <span class="quantity">qty : 1 kg</span>
            </div>
        </div>
        <div class="total"> total : ₹200/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <!-- <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form> -->

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>Online Supermarket, Grocery and Organic Fruits, Vegies and Dairy products</p>
        <a href="#" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="feature-img-1.png" alt="">
            <h3>fresh and organic</h3>
            <p>Buy certified organic fruits and vegetables online in Moradabad,Delhi!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>Ready for Deliver 24x7, Free home delivery on all orders</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>Easy pay customer care number 9045772250</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="product-1.png" alt="">
                <h3>fresh orange</h3>
                <div class="price"> ₹70/- - ₹120/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="product-2.png" alt="">
                <h3>fresh onion</h3>
                <div class="price"> ₹30/- - ₹80/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="product-3.png" alt="">
                <h3>fresh meat</h3>
                <div class="price"> ₹200/- - ₹400/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="product-4.png" alt="">
                <h3>fresh cabbage</h3>
                <div class="price"> ₹30/- - ₹70/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="product-5.png" alt="">
                <h3>fresh potato</h3>
                <div class="price"> ₹40/- - ₹70/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="product-6.png" alt="">
                <h3>fresh avocado</h3>
                <div class="price"> ₹100/- - ₹150/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="product-7.png" alt="">
                <h3>fresh carrot</h3>
                <div class="price"> ₹30/- - ₹100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="product-8.png" alt="">
                <h3>green lemon</h3>
                <div class="price"> ₹80/- - ₹180/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="cat-1.png" alt="">
            <h3>vegetables</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="cat-2.png" alt="">
            <h3>fresh fruits</h3>
            <p>upto 20% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="cat-3.png" alt="">
            <h3>dairy products</h3>
            <p>upto 30% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="cat-4.png" alt="">
            <h3>fresh meat</h3>
            <p>upto 10% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="pic-1.png" alt="">
                <p>I highly recommmended Inventory Groco. Quality products and best service. </p>
                <h3>Kafeel</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="pic-2.png" alt="">
                <p>I highly recommmended Inventory Groco. Quality products and best service.</p>
                <h3>kajal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="pic-3.png" alt="">
                <p>I highly recommmended Inventory Groco. Quality products and best service.</p>
                <h3>Keshav saini</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="pic-4.png" alt="">
                <p>I highly recommmended Inventory Groco. Quality products and best service.</p>
                <h3>Sandy saini</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="blog-1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st oct, 2022 </a>
                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Organic Fruits and Vegetables.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st oct, 2022 </a>
                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>organic fruits and vegetables.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st oct, 2022 </a>
                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Organic friuts and vegetables.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- Sign up -->

<section class="from-section" id="loginform">
    <div class="login">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="blog-1.jpg" alt="">

            </div>
            <div class="back">
                <img class="backImg" src="blog-1.jpg" alt="">

            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="login.php" method= "post">
                            <div class="button input-box">
                                <input type="submit" value="Login">
                            </div>
                            <div class="text sign-up-text">Don't have an account?
                                <form action="register.php" method= "post">
                                </label></div>
                        </div>
                    </form>
                </div>
                <div class="forms">
                 <div class="form-content">
                 <div class="signup-form">
                    <div class="title">Signup</div>
                    <form action="register.php" method = "post">
                        <div class="input-boxes">
                            <div class="input-box">
                            <div class="button input-box">
                                <input type="submit" value="Register">
                            </div>
                                </label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- signup end  -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> groco <i class="fas fa-shopping-basket"></i> </h3>
           <p>Your online super market, delivering Groceries and more daily need products across Moradabad and Delhi.</p>
           <p>Daily Grocery: Your New Best Online Grocery Store.Trusted by a number of happy customers.</p>
           <p>Behind Jail, Ashok Nagar, Moradabad</p>
           <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +919012456066 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +919045769386 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> tanyapal057@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> moradabad, india - 244001 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> catalogs </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <!-- <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="payment.png" class="payment-img" alt="">
        </div> -->

    </div>

    <div class="credit"> created by <span> v4 Designer </span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="inventory.js"></script>

</body>
</html>