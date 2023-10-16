@extends('master')

@section('content')

<div  style="background-color: #f4f4f6">
   <div class="row">
    <div class="col-lg-3 col-sm-12 col-md-3 p-5">
        <h3>Related Products</h3>
       <div class="d-flex align-items-center my-5 border-bottom pb-2">
            <div>
                <img src="https://m.media-amazon.com/images/I/517sQy+sTNL.jpg" width="100" height="100" alt="">
            </div>
            <div>
                <h4>Product Name</h4>
                <p>Price</p>
            </div>
       </div>


       <div class="d-flex align-items-center my-5 border-bottom pb-2">
            <div>
                <img src="https://m.media-amazon.com/images/I/517sQy+sTNL.jpg" width="100" height="100" alt="">
            </div>
            <div>
                <h4>Product Name</h4>
                <p>Price</p>
            </div>
        </div>

        <div class="d-flex align-items-center my-5 border-bottom pb-2">
            <div>
                <img src="https://m.media-amazon.com/images/I/517sQy+sTNL.jpg" width="100" height="100" alt="">
            </div>
            <div>
                <h4>Product Name</h4>
                <p>Price</p>
            </div>
        </div>

        <div class="d-flex align-items-center my-5 border-bottom pb-2">
            <div>
                <img src="https://m.media-amazon.com/images/I/517sQy+sTNL.jpg" width="100" height="100" alt="">
            </div>
            <div>
                <h4>Product Name</h4>
                <p>Price</p>
            </div>
        </div>


        <div class="d-flex align-items-center my-5 border-bottom pb-2">
            <div>
                <img src="https://m.media-amazon.com/images/I/517sQy+sTNL.jpg" width="100" height="100" alt="">
            </div>
            <div>
                <h4>Product Name</h4>
                <p>Price</p>
            </div>
        </div>

    </div>


    {{-- product content --}}
    <div class="col-lg-9 col-sm-12 col-md-9">
        <div class="card p-5 my-5 mx-5">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="product-img">
                        <img src="https://m.media-amazon.com/images/I/517sQy+sTNL.jpg" alt="" style="width: 300px; height: 400px;">
                    </div>
                    <div class="product-details mx-5">
                        <h3>Product Name</h3>
                        <h5>Product Number: 4214</h5>
                        <ul>
                            <li>Brand: Salisbury by Honeywell</li>
                            <li>Measurement System: US</li>
                            <li>Length: 72 Inch</li>
                            <li>Diameter: 1.25 Inch</li>
                        </ul>
                        <p>Price</p>
                        <a class="buy-btn">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>


        <ul class="nav nav-tabs mx-5 my-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Review</button>
            </li>


        </ul>

          <div class="tab-content mx-5" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <h4 class="my-5">Salisbury by Honeywell 4214 Insulated Universal Switch Stick, 6 foot length, 1.25″ diameter
                </h4>
                <p>Salisbury By Honeywell : 4214 Universal Switch Stick</p>
                <p>These hot sticks have a standard splined universal head. 1.25” dia. switch sticks are supplied with a #9971 Prong.</p>
                <p>Length : 1.8 Mtr</p>
                <p>Weight : 1.5 Kgs</p>
            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <p class="my-3">
                    There are no reviews yet.
                </p>

                <div class="my-3" style="border: 1px solid rgb(189, 189, 189); padding: 20px;">
                    <h4>Be the first to review “Honeywell Insulated Universal Switch Stick”</h4>
                    <p>Your email address will not be published. Required fields are marked *
                    </p>

                    <div class="form-group my-3">
                        <label>Your Review</label>
                        <textarea name="" id="" cols="30" rows="" class="form-control"></textarea>
                    </div>

                    <div class="form-group my-3">
                        <label>Your Name</label>
                       <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>


                    <div class="form-group my-3">
                        <label>Your Email</label>
                       <input type="email" name="email" class="form-control" placeholder="Your Email">
                    </div>

                    <div class="form-group my-">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>

          </div>


          {{-- similar product --}}
          <div class="row mx-4 mb-3">
            <h1>Similar Products</h1>


            <div class="col-lg-4 col-sm-12 col-md-3  my-5">
                <div class="card product-item">
                    <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                       <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-12 col-md-3  my-5">
                <div class="card product-item">
                    <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                       <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-12 col-md-3  my-5">
                <div class="card product-item">
                    <img src="https://fujaelelectronics.com/wp-content/uploads/2023/05/Untitled-design-47-1-600x600.jpg" class="product-image" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product Name</h5>
                      <p class="card-text">Price</p>
                       <a data-toggle="modal" data-target="#exampleModal" class="buy-btn">Get a Quote</a>
                    </div>
                </div>
            </div>

          </div>

    </div>

   </div>
</div>

@endsection
