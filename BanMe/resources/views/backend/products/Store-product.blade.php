@extends('backend.Layout.app')
@section('content')
<form action="{{route('create.product')}}" method="post" >
  @csrf
    <div class="mb-3">
        <label for="product_name" class="form-label">Name :</label>
        <input class="form-control" type="text" name="product_name">
        @error('product_name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
      </div>
      <select class="form-select" aria-label="Default select example" name="category_id">
        <option selected>Open this select menu</option>
        @foreach ($categories as $key =>$value )
        <option value="{{$value->id}}">{{ $value->category_name }}</option>
        @endforeach

      </select>
      @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
      <div class="mb-3">
        <label for="price" class="form-label">Price :</label>
        <input class="form-control" type="number" name="price">
        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
      </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" name="image">
        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
      </div>
      <button class="btn btn-primary" type="submit">Add Product</button>
</form>
@endsection