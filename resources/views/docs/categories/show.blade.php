@extends('docs.layout.app')

@section('content')
    <h1>Show Category</h1>
    <p>This endpoint retrieves a specific category by its ID.</p>

    <h2>Endpoint</h2>
    <code>GET /categories/{category}</code>

    <h2>Parameters</h2>
    <ul>
        <li><strong>category</strong> (required): The ID of the category you want to retrieve.</li>
    </ul>

    <h2>Response</h2>
    <p>On success, the response will contain the details of the category:</p>
    <pre>
{
    "id": 1,
    "name": "Electronics",
    "description": "Devices and gadgets"
}
    </pre>

    <h2>Example Request</h2>
    <pre>
curl -X GET "http://yourapi.com/categories/1" -H "Authorization: Bearer {token}"
    </pre>

    <h2>Example Response</h2>
    <pre>
{
    "data": {
        "id": 1,
        "name": "Electronics",
        "description": "Devices and gadgets"
    }
}
    </pre>
@endsection