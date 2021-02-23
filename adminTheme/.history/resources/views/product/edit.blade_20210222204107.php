@extends('product/layout')
@section('content')
<h2 style="margin-top: 12px;" class="text-center"> Edit Product</h2>
<br>
<form action="{{ route('products.update' , $product_info->id)}}" method="post" name="update_product">
{{ csrf_field() }}
@method('PATCH')
<div class="row">
   <div class="col-md-12">
       <div class="form-group">
           <strong>Title</strong>
           <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $product_info->title }}">
           <span class="text-danger">{{ $errors->first('title')}}</span>
       </div>
   </div>

   <strong>Product Code</strong>
   <input type="text" name="product_code" class="form-control">
</div>
</form>
@endsection
