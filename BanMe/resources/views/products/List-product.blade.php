@extends('Layout.app')
@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-10">
            <div class="title text-center">
                <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
        
    </div>				
  
        
        @foreach ($products as $key =>$product)

        <div class="col-lg-4">
            <div class="single-menu">
                <div class="title-div justify-content-between d-flex">
                    <h4>{{ $product->product_name }}</h4>
                    <p class="price float-right">
                        {{ $product->price }} $
                    </p>
                </div>
              <img style="width: 200px;height:200px" src="{{asset("images/products/$product->image")}}">
              <div>
                  
              </div>
            </div>
        </div>
        @endforeach
    </div>             

</div>	
@endsection