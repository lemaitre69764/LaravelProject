@extends('layouts.master')
@section('content')
     <h1>Create a product</h1>
     <form method="POST" action="{{ route ('products.store') }}">
 @csrf
     <div class="form-row">
    <label>Title</label>
<input class="form-control" type="text" name="title" >
</div>
<div class="form-row">
    <label>Description</label>
<input class="form-control" type="text" name="description" >
</div>
<div class="form-row">
    <label>Price</label>
<input class="form-control" type="number" min="1.00" step="0.01" name="price" >
</div>
<div class="form-row">
    <label>Stock</label>
<input class="form-control" type="number" min="0" name="stock" >
</div>
<div class="form-row">
    <label>Status</label>
<select class="custom-select" name="status">
    <option value="" selected>Select...</option>
    <option value="available">Available</option>
    <option value="unavailable">Unavailable</option>
</select>
</div>
<div class="form-row">
    <button class="btn btn-primary btn-lg" type="submit">Create Product</button>
</div>
</form>
     @endsection
