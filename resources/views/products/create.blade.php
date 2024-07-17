@extends('layouts.master')
@section('content')
     <h1>Create a product</h1>
     <form method="POST" action="{{ route ('products.store') }}">
 <div class="form-row">
    <label>Title</label>
<input class="form-control" type="text" name="title" required>
</div>
<div class="form-row">
    <label>Description</label>
<input class="form-control" type="text" name="title" required>
</div>
<div class="form-row">
    <label>Priec</label>
<input class="form-control" type="number" min="1.00" step="0.01" name="title" required>
</div>
<div class="form-row">
    <label>Stock</label>
<input class="form-control" type="number" min="0" name="stock" required>
</div>
<div class="form-row">
    <label>Status</label>
<select class="custom-select" name="status" required="">
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
 
