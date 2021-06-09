@extends('backend.Layout.app')
@section('content')
<button style="margin: 10px" type="button" class="btn btn-primary">
    <a href="{{ route('store.product') }}" style="color: white">Thêm Mới</a>
     </button>	
     <div class="col">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <form action="{{route('search.product')}}">
              @csrf
              <input id="search_submit" type="submit" value="submit" hidden>
          <div class="input-group">
              <span class="input-group-text text-body" onclick="document.getElementById('search_submit').click();"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..." name="search">
   
          </div>
      </form>
      </div>
  </div>
<div class="row">
<table class="table">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">image</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $key=>  $product)
            <tr>
                <td>{{++$key}}</td>
                <Td>{{ $product->product_name }}</Td>
                <Td>{{ $product->price }}</Td>
                <Td>  <img style="width: 100px;height:100px" src="{{asset("images/products/$product->image")}}"></Td>
                <Td>


                  <button style="margin: 10px" type="button" class="btn btn-danger">
                    <a href=" {{route('delete.product',$product->id) }}" style="color: white">Delete</a>
                     </button>	
                </Td>
            </tr>

        @endforeach
    </tbody>
  </table>

  @endsection