@extends('docs.layout.app')

@section('content')
    <h1>Products Index API Documentation</h1>
    <p>This endpoint retrieves a list of products.</p>

    <h2>Endpoint</h2>
    <p><code>GET /api/products</code></p>

    <h2>Request Parameters</h2>
    <ul>
        <li><strong>page</strong> (optional): The page number for pagination.</li>
        <li><strong>limit</strong> (optional): The number of products to return per page.</li>
    </ul>

    <h2>Response</h2>
    <p>The response will be a JSON object containing the following fields:</p>
    <ul>
        <li><strong>data</strong>: An array of product objects.</li>
        <li><strong>meta</strong>: Metadata about the response, including pagination info.</li>
    </ul>

    <h2>Example Response</h2>
    <pre>
{
    "data": [
        {
            "id": 1,
            "name": "Product 1",
            "description": "Description of Product 1",
            "price": 100.00
        },
        {
            "id": 2,
            "name": "Product 2",
            "description": "Description of Product 2",
            "price": 150.00
        }
    ],
    "meta": {
        "current_page": 1,
        "last_page": 5,
        "per_page": 10,
        "total": 50
    }
}
    </pre>
@endsection