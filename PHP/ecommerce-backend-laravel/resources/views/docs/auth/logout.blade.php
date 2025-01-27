@extends('docs.layouts.app')

@section('title', 'Logout API Documentation')

@section('content')
<h1>Logout API</h1>

<div class="endpoint-section">
  <h2>Logout User</h2>
  <div class="endpoint-info">
    <span class="method">POST</span>
    <span class="endpoint">/api/auth/logout</span>
  </div>

  <h3>Headers</h3>
  <pre>
Authorization: Bearer {access_token}
Accept: application/json
  </pre>

  <h3>Response</h3>
  <pre class="response-success">
{
  "message": "Successfully logged out"
}
  </pre>

  <h3>Error Response</h3>
  <pre class="response-error">
{
  "message": "Unauthenticated"
}
  </pre>
</div>
@endsection