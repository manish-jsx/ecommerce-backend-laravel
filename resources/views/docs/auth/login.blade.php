@extends('docs.layout.app')


@section('title', 'Login API Documentation')

@section('content')
    <h1>Login API</h1>
    <div class="endpoint">
        <span class="method post">POST</span> /api/login
        
        <h3>Request Body</h3>
        <pre><code class="language-json">
{
    "email": "user@example.com",
    "password": "password"
}
        </code></pre>

        <h3>Response</h3>
        <pre><code class="language-json">
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9..."
}
        </code></pre>
    </div>
@endsection

