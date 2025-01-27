@extends('docs.layout.app')

@section('content')
    <h1>Categories Index API Documentation</h1>
    <p>This endpoint retrieves a list of categories.</p>

    <h2>Endpoint</h2>
    <p><code>GET /categories</code></p>

    <h2>Request</h2>
    <p>No parameters are required for this request.</p>

    <h2>Response</h2>
    <p>The response will be a JSON array of categories:</p>
    <pre>
    [
        {
            "id": 1,
            "name": "Category 1"
        },
        {
            "id": 2,
            "name": "Category 2"
        }
    ]
    </pre>

    <h2>Example</h2>
    <p>To retrieve the list of categories, you can use the following curl command:</p>
    <pre>
    curl -X GET http://yourapiurl.com/categories
    </pre>
@endsection