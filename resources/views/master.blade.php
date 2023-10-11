<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Ixony Engineering Limited</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    {{-- topbar --}}
    <div class="topbar">
        <div class="topbar-contact">
            <i class="fa-solid fa-phone" style="color: #fafcff;"></i>
            <span>+88 012 3456 7894</span>
        </div>
        <div class="topbar-text">
            <p>Buy a product is very easy! <a href="#product">shop now</a></p>
        </div>
        <div class="topbar-social">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </div>


    {{-- navbar --}}

   <div class="d-flex justify-content-between align-items-center border-bottom header">
        <div class="mx-5">
            <img src="{{asset('/ixony.png')}}" alt="" style="width: 80px;">
        </div>
        <div class="header-menu">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
                <li>
                    <a href="">Category</a>
                </li>
                <li>
                    <a href="">Address</a>
                </li>

            </ul>
        </div>

        <div class="mx-5 header-social">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
   </div>


   {{-- slider --}}

        <div class="slider">
            <div class="d-flex justify-content-center">
                <div class="slider-info">
                    <p>Mask</p>
                    <p>Industrial PPE</p>
                </div>
                <div>
                    <img src="{{asset('/slider1.png')}}" style="width: 100%; height: 300px;" alt="">
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <div class="slider-info">
                    <p>Mask</p>
                    <p>Industrial PPE</p>
                </div>
                <div>
                    <img src="{{asset('/slider2.png')}}" style="width: 100%; height: 300px;" alt="">
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <div class="slider-info">
                    <p>Mask</p>
                    <p>Industrial PPE</p>
                </div>
                <div>
                    <img src="{{asset('/slider3.png')}}" style="width: 100%; height: 300px;" alt="">
                </div>
            </div>
          </div>

{{--
    <div class="text-center mt-4 showcase p-5">
        <img src="{{asset('/ixony.png')}}" class="logo">
        <h3 class="text-white">Welcome to</h3>
        <h4 class="text-white">Ixony Engineering Limited</h4>
        <p class="text-white">The biggest importer and authorized distributor of world-renowned safety products in Bangladesh.</p>
        <button class="bg-danger">Contact Us</button>
    </div> --}}

{{-- shipping --}}
    <div class="row shipping">
        <div class="col-lg-3 p-2">
            <i class="fa-solid fa-phone-volume"></i>
            <h3>CALL US ANY TIME</h3>
            <p>Contact us 24/7 hours a day</p>
        </div>
        <div class="col-lg-3 p-2">
            <i class="fa-solid fa-truck" class="icon"></i>
            <h3>PICKUP AT ANY STORE</h3>
            <p>Free shipping on orders over $65</p>
        </div>
        <div class="col-lg-3 p-2">
            <i class="fa-regular fa-credit-card"></i>
            <h3>SECURED PAYMENT</h3>
            <p>We accept all major credit cards</p>
        </div>
        <div class="col-lg-3 p-2">
            <i class="fa-solid fa-arrow-rotate-left"></i>
            <h3>FREE RETURNS</h3>
            <p>30-days free return policy</p>
        </div>
    </div>


    {{-- latest product --}}
    <div class="latest-product">
        <h3 class="text-center mb-5">Latest Product</h3>

        <button style="position: absolute; right: 50px; top: 20px; border: none;">
            <i class="fa-solid fa-arrow-right" style="color: white; background-color: #2f415d; padding: 8px;"></i>
        </button>
        <div class="row">
            <div class="col-lg-2">
                <div class="card product-item">
                    <img src="https://m.media-amazon.com/images/I/71kyfjacoBL.jpg" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYUucO-ReCtNTt7aEXznnnCfir-bfyH1XIqQ&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-item">
                    <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                    </div>
                  </div>
            </div>


        </div>
    </div>

    {{-- newsletter --}}
    <div class="newsletter">
        <div class="newsletter-text">
            <h4>SIGN UP OUR NEWSLETTER & GET 10% OFF</h4>
            <p>Sign up to stay in the loop. Receive updates, access to exclusive deals, and more.</p>
        </div>

        <div class="newsletter-input">
            <input type="text" placeholder="Enter Your Email Address">
            <button>Subscribe</button>
        </div>
    </div>


    {{-- footer --}}
    <div class="footer">
        <div class="footer-logo">
            <img src="{{asset('/ixony.png')}}" class="logo">
        </div>

        <div class="footer-info">
            <h4 class="text-uppercase">Informations</h4>
            <p>My Account </p>
            <p>About us</p>
            <p>Login</p>
            <p>Privacy policy</p>

        </div>

        <div class="footer-contact">
            <h4 class="text-uppercase">Contact US</h4>
            <div>

                <div class="my-2">
                    <i class="fa-solid fa-location-dot mr-2"></i>
                    <span>Block C, Banasree</span>
                </div>


                <div class="my-2">
                    <i class="fa-solid fa-phone mr-2" style="color: #fafcff;"></i>
                    <span>+88 012 3456 7894</span>
                </div>


                <div class="my-2">
                    <i class="fa-solid fa-envelope mr-2"></i>
                    <span>ixony@gmail.com</span>

                </div>
            </div>
            <div class="topbar-social">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
    </div>

    <div class="footer-copyright" style="background-color: #2f415d; padding-bottom: 20px; padding-top: 10px;">
        <p class="text-center text-white">©2023 Ixony. All Rights Reserved.</p>
    </div>



    {{-- end footer --}}



    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
        $(document).ready(function(){
          $('.slider').slick({
            // Slick Slider options go here
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
          });
        });
      </script>


</body>
</html>
