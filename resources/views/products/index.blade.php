<!-- include master  -->
@include('layouts.master') 
<!-- include content  -->
@section('content','Products')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Products</h1>
                <!-- <a href="{{ route('products.create') }}" class="btn btn-success">Add new product</a> -->
            </div>
            <div class="col-md-6">
                <a class="btn btn-sm btn-primary float-end" href="{{route('products.create')}}">Create</a>
            </div>


        
        </div>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th>
                          Actions
                        </th>
                    <!-- add delete button  -->
                    <th>
                       
                    </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <th scope="row">{{$key +1}}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                            <a class="btn btn-sm btn-info" href="{{route('products.edit',$product->id)}}">Edit</a>
                            <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}

    </div>

