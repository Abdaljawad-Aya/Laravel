@extends('product.layout')
@section('content')
<a href="{{ route('product.create')}}" class="btn btn-success mb-2">Add</a>
<br>
<div class="row">
    <div class="col-12">
        <table class="table table-borderd" id="laravel_crud">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Product Code</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title}}</td>
                    <td>{{ $product->product_code}}</td>
                    <td>{{ $product->description}}</td>
                    <td>{{ date('Y-m-d', strtotime($product->created_at)) }}</td>
                    <td><a href="{{ route('products.edit' , $product->id)}}" class="btn btn-primary">Edit</a></td>

                    <form action="{{route('products.edit', $product->id)}}" method="post">
                       {{ csrf_field() }}
                       @method('DELETE')
                       <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
