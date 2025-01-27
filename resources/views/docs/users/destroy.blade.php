@extends('docs.layout.app')


@section('title', 'Destroy User API Documentation')


@section('content')
    <h1>Destroy User API</h1>
    <div class="endpoint">
        <span class="method delete">DELETE</span> /api/users/{id}
        
        <h3>Request Headers</h3>
        <pre><code class="language-json">
{
    "Authorization": "Bearer {token}"
}
        </code></pre>

        <h3>Response</h3>
        <pre><code class="language-json">
{
    "message": "User deleted successfully"
}
        </code></pre>
    </div>


    <h3>Error Response</h3>
    <pre><code>
{




    "error": "User not found"
}
    </code></pre>
@endsection

