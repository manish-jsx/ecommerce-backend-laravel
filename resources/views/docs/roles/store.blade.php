@extends('docs.layout.app')

@section('content')
<h1>Store Role API</h1>

<h2>Endpoint</h2>
<code>POST /api/roles</code>

<h2>Description</h2>
<p>Creates a new role in the system.</p>

<h2>Request Headers</h2>
<pre>
Authorization: Bearer {your-token}
Content-Type: application/json
Accept: application/json
</pre>

<h2>Request Body</h2>
<pre>
{
  "name": "admin",
  "permissions": [1, 2, 3]  // Array of permission IDs
}
</pre>

<h2>Response</h2>
<h3>Success (201 Created)</h3>
<pre>
{
  "status": "success",
  "message": "Role created successfully",
  "data": {
    "id": 1,
    "name": "admin",
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
  }
}
</pre>

<h2>Error Responses</h2>
<h3>400 Bad Request</h3>
<pre>
{
  "status": "error",
  "message": "Validation failed",
  "errors": {
    "name": ["The name field is required"]
  }
}
</pre>

<h3>401 Unauthorized</h3>
<pre>
{
  "status": "error",
  "message": "Unauthorized access"
}
</pre>
@endsection