<!-- add form create product -->

@include('layouts.master')

@section('content','Update Product')

<!-- add form -->
<div class="container">
<div class="row">
    <div class="col-md-6">
    <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input value="{{$product->name}}" type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input value="{{$product->description}}" type="text" class="form-control" id="description" name="description" placeholder="Enter description">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input value="{{$product->price}}" type="text" class="form-control" id="price" name="price" placeholder="Enter price">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input value="{{$product->quantity}}" type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
    </div>
</div>
</div>