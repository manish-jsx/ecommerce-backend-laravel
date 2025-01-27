@extends('docs.layout.app')

@section('content')
    <h1>Get Authenticated User</h1>
    <p>This endpoint retrieves the authenticated user's information.</p>

    <h2>Endpoint</h2>
    <p><code>GET /me</code></p>

    <h2>Authentication</h2>
    <p>This endpoint requires authentication. You must include a valid token in the Authorization header.</p>

    <h2>Response</h2>
    <pre><code>{
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
}</code></pre>

    <h2>Example Request</h2>
    <pre><code>curl -X GET "https://api.example.com/me" -H "Authorization: Bearer YOUR_TOKEN"</code></pre>
@endsection