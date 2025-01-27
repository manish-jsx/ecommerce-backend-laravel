@extends('docs.layout.app')

@section('content')
<h1>API Documentation</h1>

<div class="endpoint-group">
    <h2>Authentication</h2>
    <ul>
        <li><a href="{{ route('docs.auth.login') }}">Login API</a></li>
        <li><a href="{{ route('docs.auth.register') }}">Register API</a></li>
    </ul>
</div>

<div class="endpoint-group">
    <h2>Products</h2>
    <ul>
        <li><a href="{{ route('docs.products.index') }}">List Products</a></li>
        <li><a href="{{ route('docs.products.show') }}">Get Product</a></li>
        <li><a href="{{ route('docs.products.store') }}">Create Product</a></li>
    </ul>
</div>

<div class="endpoint-group">
    <h2>Categories</h2>
    <ul>
        <li><a href="{{ route('docs.categories.index') }}">List Categories</a></li>
        <li><a href="{{ route('docs.categories.show') }}">Get Category</a></li>
        <li><a href="{{ route('docs.categories.store') }}">Create Category</a></li>
    </ul>
</div>

<div class="endpoint-group">
    <h2>Orders</h2>
    <ul>
        <li><a href="{{ route('docs.orders.index') }}">List Orders</a></li>
        <li><a href="{{ route('docs.orders.show') }}">Get Order</a></li>
        <li><a href="{{ route('docs.orders.store') }}">Create Order</a></li>
    </ul>

    <h2>Users</h2>
    <ul>
        <li><a href="{{ route('docs.users.index') }}">List Users</a></li>
        <li><a href="{{ route('docs.users.show') }}">Get User</a></li>
        <li><a href="{{ route('docs.users.store') }}">Create User</a></li>
    </ul>
</div>




@endsection