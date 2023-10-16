@extends('master')


@section('content')
{{-- cart --}}

    {{-- <div style="background-color:#fafcff" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Your Cart Items (2)</h5>
        <button type="button" class="btn-close btn-sm text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    </div>
    <hr style="color:gray; margin: 0px 20px;">
    <div class="offcanvas-body">

        <div class="cart-items">

            <div class="cart-item">
                <img src="{{asset('/ibn sina.png')}}" width="100" alt="">
                <div>
                    <p class="p-0 my-0">VFD New 234</p>
                    <p class="p-0 my-0">1000000 TK</p>
                </div>
            </div>

            <div>
                <span>QTY: </span>
                <button style="color:#2f415d; font-weight: bold; border: none; background-color: transparent;">2</button>
            </div>
        </div>

        <hr style="color:gray; margin: 0px 20px;">

        <div class="cart-items">

            <div class="cart-item">
                <img src="{{asset('/ibn sina.png')}}" width="100" alt="">
                <div>
                    <p class="p-0 my-0">VFD New 234</p>
                    <p class="p-0 my-0">1000000 TK</p>
                </div>
            </div>

            <div>
                <span>QTY: </span>
                <button style="color:#2f415d; font-weight: bold; border: none; background-color: transparent;">2</button>
            </div>
        </div>


        <div class="cart-bottom">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Total: </h3>
                <p>200000 TK</p>
            </div>

            <div>
                <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary w-50">View Cart</a>
                <a data-toggle="modal" data-target="#exampleModal" class="btn btn-info w-50">Checkout</a>
            </div>
        </div>

    </div>
    </div> --}}


   {{-- slider --}}

   <div class="slider">
    <div class="d-flex justify-content-center align-items-center">
        <div class="slider-info">
            <p>Mask</p>
            <p>Industrial PPE</p>
        </div>
        <div>
            <img src="{{asset('/slider1.png')}}" class="slider-img" alt="">
        </div>
    </div>


    <div class="d-flex justify-content-center align-items-center">
        <div class="slider-info">
            <p>Mask</p>
            <p>Industrial PPE</p>
        </div>
        <div>
            <img src="{{asset('/slider2.png')}}" class="slider-img" alt="">
        </div>
    </div>


    <div class="d-flex justify-content-center align-items-center">
        <div class="slider-info">
            <p>Mask</p>
            <p>Industrial PPE</p>
        </div>
        <div>
            <img src="{{asset('/slider3.png')}}" class="slider-img" alt="">
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
<h3 class="text-center mb-5" style="color:#2f415d;">Latest Product</h3>

<button style="position: absolute; right: 50px; top: 20px; border: none;">
    <i class="fa-solid fa-arrow-right" style="color: white; background-color: #2f415d; padding: 8px;"></i>
</button>
<div class="row">
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://m.media-amazon.com/images/I/71kyfjacoBL.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
              <button data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</button>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYUucO-ReCtNTt7aEXznnnCfir-bfyH1XIqQ&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>



    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://m.media-amazon.com/images/I/71kyfjacoBL.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYUucO-ReCtNTt7aEXznnnCfir-bfyH1XIqQ&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>


</div>
</div>


{{-- electric --}}
<div class="latest-product" style="background-color: #e3ecfc">
<h3 class="text-center mb-5" style="color:#2f415d;">Electric</h3>

<button style="position: absolute; right: 50px; top: 20px; border: none;">
    <i class="fa-solid fa-arrow-right" style="color: white; background-color: #2f415d; padding: 8px;"></i>
</button>
<div class="row">
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://m.media-amazon.com/images/I/71kyfjacoBL.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYUucO-ReCtNTt7aEXznnnCfir-bfyH1XIqQ&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>



    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://m.media-amazon.com/images/I/71kyfjacoBL.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYUucO-ReCtNTt7aEXznnnCfir-bfyH1XIqQ&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>
    <div class="col-lg-2 my-2">
        <div class="card product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJdJD8yb4-lkufZlPaXpxRTkIkYN3fqVO8sg&usqp=CAU" class="product-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Price</p>
               <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
            </div>
          </div>
    </div>


</div>
</div>




<h3 class="client-text">Our Clients</h3>

{{-- Our Clients --}}
<div class="client">

<div class="client-logo">
    <img src="{{asset('/beximco.png')}}" alt="">
</div>

<div class="client-logo">
    <img style="width: 300px; height: 200px;" src="{{asset('/square.png')}}" alt="">
</div>

<div class="client-logo">
    <img src="{{asset('/ibn sina.png')}}" alt="">
</div>

<div class="client-logo">
    <img src="{{asset('/beximco.png')}}" alt="">
</div>

<div class="client-logo">
    <img src="{{asset('/beximco.png')}}" alt="">
</div>

<div class="client-logo">
    <img src="{{asset('/beximco.png')}}" alt="">
</div>

<div class="client-logo">
    <img src="{{asset('/beximco.png')}}" alt="">
</div>
</div>
@endsection
