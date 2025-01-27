@extends('docs.layout.app')

@section('content')
    <h1>Update Product API Documentation</h1>
    <p>This endpoint allows you to update an existing product.</p>

    <h2>Endpoint</h2>
    <p><code>PUT /api/products/{product}</code></p>

    <h2>Parameters</h2>
    <ul>
        <li><strong>product</strong> (required): The ID of the product you want to update.</li>
        <li><strong>name</strong> (optional): The new name of the product.</li>
        <li><strong>description</strong> (optional): The new description of the product.</li>
        <li><strong>price</strong> (optional): The new price of the product.</li>
        <li><strong>category_id</strong> (optional): The ID of the category to which the product belongs.</li>
    </ul>

    <h2>Request Example</h2>
    <pre><code>
PUT /api/products/1
Content-Type: application/json

{
    "name": "Updated Product Name",
    "description": "Updated description of the product.",
    "price": 19.99,
    "category_id": 2
}
    </code></pre>

    <h2>Response</h2>
    <p>On success, the API will return the updated product details:</p>
    <pre><code>
{
    "id": 1,
    "name": "Updated Product Name",
    "description": "Updated description of the product.",
    "price": 19.99,
    "category_id": 2,
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-02T00:00:00.000000Z"
}
    </code></pre>

    <h2>Errors</h2>
    <p>Possible error responses include:</p>
    <ul>
        <li><strong>404 Not Found</strong>: If the product does not exist.</li>
        <li><strong>422 Unprocessable Entity</strong>: If validation fails.</li>
    </ul>
@endsection