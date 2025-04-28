@extends('layouts.app')

@section('content')
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Product Name *</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="price">Price ($) *</label>
            <input type="number" name="price" class="form-control" step="0.01" min="0" required value="{{ old('price') }}">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection