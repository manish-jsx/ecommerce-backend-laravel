@extends('docs.layout.app')

@section('content')
    <h1>Product Show API Documentation</h1>
    <p>This endpoint retrieves a specific product by its ID.</p>

    <h2>Endpoint</h2>
    <p><strong>GET</strong> /products/{product}</p>

    <h2>Parameters</h2>
    <ul>
        <li><strong>product</strong> (required): The ID of the product you want to retrieve.</li>
    </ul>

    <h2>Response</h2>
    <p>On success, the API will return a JSON object containing the product details:</p>
    <pre>
{
    "id": 1,
    "name": "Product Name",
    "description": "Product Description",
    "price": 100.00,
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
}
    </pre>

    <h2>Example Request</h2>
    <pre>
GET /products/1
    </pre>

    <h2>Example Response</h2>
    <pre>
HTTP/1.1 200 OK
Content-Type: application/json

{
    "id": 1,
    "name": "Product Name",
    "description": "Product Description",
    "price": 100.00,
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
}
    </pre>
@endsection