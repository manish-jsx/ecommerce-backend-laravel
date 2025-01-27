@extends('docs.layout.app')

@section('content')
    <h1>Update Category</h1>
    <p>This endpoint allows you to update an existing category.</p>

    <h2>Endpoint</h2>
    <p><code>PUT /categories/{category}</code></p>

    <h2>Parameters</h2>
    <ul>
        <li><strong>category</strong> (required): The ID of the category to update.</li>
        <li><strong>name</strong> (required): The new name of the category.</li>
        <li><strong>description</strong> (optional): A description of the category.</li>
    </ul>

    <h2>Request Example</h2>
    <pre><code>
PUT /categories/1
Content-Type: application/json

{
    "name": "Updated Category Name",
    "description": "Updated description for the category."
}
    </code></pre>

    <h2>Response</h2>
    <p>On success, the API will return a 200 status code and the updated category object:</p>
    <pre><code>
{
    "id": 1,
    "name": "Updated Category Name",
    "description": "Updated description for the category."
}
    </code></pre>

    <h2>Errors</h2>
    <p>Possible error responses include:</p>
    <ul>
        <li><strong>404 Not Found</strong>: If the category does not exist.</li>
        <li><strong>422 Unprocessable Entity</strong>: If the request data is invalid.</li>
    </ul>
@endsection