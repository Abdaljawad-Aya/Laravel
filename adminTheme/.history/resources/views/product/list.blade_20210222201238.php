@extends('product.layout')
@section('content')
<a href="{{ route('product.create')}}" class="btn btn-success mb-2">Add</a>
<br>
<div class="row">
    <div class="col-12">
        <table class="table table-borderd" id="laravel_crud"></table>
    </div>
</div>
@endsection
