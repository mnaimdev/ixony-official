<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <div class="slider row">
            <div class="col-lg-12">

            </div>
            <div class="col-lg-12">

            </div>
            <div class="col-lg-12">

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



    <div class="latest-product">
        <h3 class="text-center mb-5">Latest Product</h3>

        <button style="position: absolute; right: 50px; top: 20px;">
            <i class="fa-solid fa-arrow-right" style="color: white;"></i>
        </button>
        <div class="row">
            <div class="col-lg-2">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/I/71kyfjacoBL.jpg" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Short description</p>
                      <p class="card-text">Price</p>
                      <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYUucO-ReCtNTt7aEXznnnCfir-bfyH1XIqQ&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Short description</p>
                      <p class="card-text">Price</p>
                      <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image h-25" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Short description</p>
                      <p class="card-text">Price</p>
                      <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Short description</p>
                      <p class="card-text">Price</p>
                      <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Short description</p>
                      <p class="card-text">Price</p>
                      <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Short description</p>
                      <p class="card-text">Price</p>
                      <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                  </div>
            </div>


        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="jquery-3.7.1.min.js"></script>

         <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').slick({

                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    responsive: [
                        {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                        },
                        {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            });
        </script>

</body>
</html>
