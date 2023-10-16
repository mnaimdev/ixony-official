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
    <link rel="stylesheet" href="{{asset('/frontend_assets/style.css')}}">
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
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#contac">Contact</a>
                </li>
                <li>
                    <a href="#category">Category</a>
                </li>
                <li>
                    <a href="#address">Address</a>
                </li>

            </ul>
        </div>

        <div class="mx-5 header-social">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
        </div>
   </div>


   @yield('content')


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


    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="POST">
                @csrf

                <div class="form-group my-3">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>

                <div class="form-group my-3">
                    <label>Your Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>

                <div class="form-group my-3">
                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="Subject" class="form-control">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>



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
            dots: true,
            arrows: true,
          });
        });
      </script>


    <script>
        $(document).ready(function(){
          $('.client').slick({
            // Slick Slider options go here
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
          });
        });
      </script>






</body>
</html>
