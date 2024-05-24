<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Pen2Paper</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/f0935ec9ad.js" crossorigin="anonymous"></script>
    <script defer src="./app.js"></script>
</head>
<body>
    
    
    <div class="container">  
        <div class="navbar">
            <div class="logo">
                <img src="IMAGES/pen2paperlogo.png" width="150px">
            </div>
            <nav>
                <ul>
                <input type="text" placeholder="Search Here..."/>
                <button>search</button>
            </ul>
                <ul>
                   <li><a href="INDEX.php">Home</a></li> 
                   <li><a href="product.php">Products</a></li> 
                   <li><a href="">Contact</a></li> 
                   <li><a href="login.php">Account </a></li> 
                </ul>
            </nav>
            <div class="menu-icon">
            <i class="bi bi-cart4"></i><svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>
             
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
            </div>
            </div>
        <div class="row">
            <div class="col-2">
                <h1>Widest choice in stationary items<br> From fun to learn</h1>
               <p>New products are added every week</p>
               <a href="product.php" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
               <img src="IMAGES/front image.jpg" >
            </div>
        </div>

    </div>
   </div>
   <!-------FEATURED CATEGORIES------------------>
   <div class="categories">
       <BR>
        <div class="small-container">
            <div class="row">
           
                
                <div class="col-3">
                 <img src="STATIONARY/MARKER MAIN.jpg">
                 
                </div>
                <div class="col-3">
                 <img src="STATIONARY/DIARY MAIN.jpg">
                
                </div>
                <div class="col-3">
                 <img src="STATIONARY/COMPASS1.jpg">
                 
                </div>
             
            </div>

        </div>
       
   </div>
   <BR>
  
    <!-------FEATURED   PRODUCTS------------------>
    <div class="small-container">
        <h2 class="title">FEATURED PRODUCTS</h2>
        <div class="row">
            <div class="col-4">
                <img src="STATIONARY/TRIMAX_PEN.jpg">
                <h4 align="center">Trimax Gold Pen</h4>
                <div class="rating" align="center">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    

                </div>
                <P align="center">RS 100.00</P>
            </div>
            <div class="col-4">
                <img src="STATIONARY/COMPASS_BOX.jpg">
                <h4 align="center">Compass Box</h4>
                <div class="rating" align="center">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                
                <P align="center">RS 90.00</P>
            </div>
            <div class="col-4">
                <img src="STATIONARY/CALCULATOR.jpg">
                <br><br><br>
                <h4 align="center">Calculator</h4>
                <div class="rating" align="center">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="fa fa-star-o"></i>
                    
                </div>
                <P align="center">RS 500.00</P>
            </div>
            <div class="col-4">
                <img src="STATIONARY/STAPLER.jpg">
                <h4 align="center">Stapler</h4>
                <div class="rating" align="center">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <P align="center">RS 50.00</P>
            </div>
        </div>
        <h2 class="title">LATEST PRODUCTS</h2>
        <div class="row">
        <div class="col-4">
            <img src="STATIONARY/coloured paper.jpg"><br>
            <br>
            <br>
            <h4 align="center">Coloured Papers</h4>
            <div class="rating" align="center">
                <i class="fas fa-star "></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <P align="center">RS 120.00</P>
        </div>
        <div class="col-4">
            <img src="STATIONARY/HIGHLIGHTERS.jpg">
            <h4 align="center">Highlighters</h4>
            <div class="rating" align="center">
                <i class="fas fa-star "></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <P align="center">RS 800.00</P>
        </div>
        <div class="col-4">
            <img src="STATIONARY/technoreffills.jpg">
            <h4 align="center"> Technotip Reffils</h4>
            <div class="rating" align="center">
                <i class="fas fa-star "></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <P align="center">RS 100.00</P>
        </div>
        <div class="col-4">
            <img src="STATIONARY/NOTEBOOKS.jpg">
            <h4 align="center">Classmate Notebooks</h4>
            <div class="rating" align="center">
                <i class="fas fa-star "></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <P align="center">RS 500.00</P>
        </div>
     </div>   
    </div>
    <!--------------BRANDS----------------------->
       <div class="brands">
           <div class="small-cotainer">
            <h2 class="title">BRANDS</h2>
               <div class="row">
                   <div class="col-5">
                       <img src="STATIONARY/camlin1.png" alt="">
                   </div>
                   <div class="col-5">
                    <img src="STATIONARY/classmatelogo" alt="">
                    </div>
                    <div class="col-5">
                        <img src="STATIONARY/casio logo.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="STATIONARY/apsara logo.png" alt="abc">
                    </div>
                    <div class="col-5">
                        <img src="STATIONARY/reynold logo.png" alt="">
                    </div>
                   
               </div>
           </div>
       </div>
       <!----------------------footer--------------------------------->
       <div class="footer">
           <div class="container">
               <div class="row">
                    <div class="footer-col-1">
                       <h3>Download Our App</h3>
                       <p>Download App for Android and Ios mobile phone. </p>
                       <div class="app-logo">
                           <img src="STATIONARY/google play logo.png">
                           <img src="STATIONARY/appstore logo.png">
                       </div>
                    </div>
                    <div class="footer-col-2">
                    <img src="STATIONARY/p22p.jpg">
                    <p>Our Purpose Is To sustainably Make The Easy Shoping </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>YouTube</li>
                        </ul>
                    </div>
               </div>
               <hr>
               <p class="copyright">Copyright 2021 - Pen-2-paper </p>
           </div>
       </div>

</body>
</html>
