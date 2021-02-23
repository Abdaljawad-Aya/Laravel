@extends('product/layout')
@section('content')
<h2 style="margin-top:12px;" class="text-center"> Add Product</h2>
<br>
<form action="{{ route('products.store') }} method
post" name="add_product"></form>
