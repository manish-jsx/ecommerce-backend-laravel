@extends('docs.layout.app')

@section('content')
    <h1>API Documentation</h1>
    <p>Welcome to the API documentation. Below are the links to the various sections:</p>
    
    <h2>Authentication</h2>
    <ul>
        <li><a href="{{ route('docs.auth.login') }}">Login</a></li>
        <li><a href="{{ route('docs.auth.logout') }}">Logout</a></li>
        <li><a href="{{ route('docs.auth.me') }}">Me</a></li>
        <li><a href="{{ route('docs.auth.register') }}">Register</a></li>
    </ul>

    <h2>Categories</h2>
    <ul>
        <li><a href="{{ route('docs.categories.index') }}">List Categories</a></li>
        <li><a href="{{ route('docs.categories.show', ['category' => '1']) }}">Show Category</a></li>
        <li><a href="{{ route('docs.categories.store') }}">Create Category</a></li>
        <li><a href="{{ route('docs.categories.update', ['category' => '1']) }}">Update Category</a></li>
        <li><a href="{{ route('docs.categories.destroy', ['category' => '1']) }}">Delete Category</a></li>
    </ul>

    <h2>Products</h2>
    <ul>
        <li><a href="{{ route('docs.products.index') }}">List Products</a></li>
        <li><a href="{{ route('docs.products.show', ['product' => '1']) }}">Show Product</a></li>
        <li><a href="{{ route('docs.products.store') }}">Create Product</a></li>
        <li><a href="{{ route('docs.products.update', ['product' => '1']) }}">Update Product</a></li>
        <li><a href="{{ route('docs.products.destroy', ['product' => '1']) }}">Delete Product</a></li>
    </ul>
@endsection