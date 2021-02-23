@extends('product/layout')
@section('content')
<h2 style="margin-top: 12px;" class="text-center"> Edit Product</h2>
<br>
<form action="{{ route('products.update' , $product_info->id)}}"></form>
@endsection
