
@extends('master')

@section('content')

<div  style="background-color: #f4f4f6">
   <div class="row">

    <div class="col-lg-3 col-sm-12 col-md-3">
       <div class="m-5">
        <p>Category (5) </p>
        <p>Category (5) </p>
        <p>Category (5) </p>
        <p>Category (5) </p>
        <p>Category (5) </p>
        <p>Category (5) </p>
        <p>Category (5) </p>
       </div>
    </div>

    {{-- product content --}}
    <div class="col-lg-9 col-sm-12 col-md-9">
        <div class="card p-5 my-5 mx-5">
            <div class="card-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                  </nav>

                  <h3>Search Results: “Electrical Safety”</h3>

                  <div class="d-flex justify-content-between my-3 align-items-center">
                    <p>Showing all 3 results</p>
                    <select name="" id="" class="form-control w-25">
                        <option value="">Relevance</option>
                        <option value="">Short by popularity</option>
                        <option value="">Short by latest</option>
                        <option value="">Short by rating</option>
                        <option value="">Short by price: low to high</option>
                        <option value="">Short by price: high to low</option>
                    </select>
                  </div>


                  <div class="row">

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

   </div>
</div>

@endsection
