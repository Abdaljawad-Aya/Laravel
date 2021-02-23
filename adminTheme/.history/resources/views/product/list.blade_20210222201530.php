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
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
