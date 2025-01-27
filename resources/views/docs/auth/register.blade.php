@extends('docs.layout.app')

@section('title', 'User Registration API')

@section('content')
<h1>User Registration API</h1>

<div class="endpoint">
  <h2>Register New User</h2>
  <p>Endpoint: <code>POST /api/register</code></p>

  <h3>Request Parameters</h3>
  <table class="table">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Type</th>
        <th>Required</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>name</td>
        <td>string</td>
        <td>Yes</td>
        <td>User's full name</td>
      </tr>
      <tr>
        <td>email</td>
        <td>string</td>
        <td>Yes</td>
        <td>Valid email address</td>
      </tr>
      <tr>
        <td>password</td>
        <td>string</td>
        <td>Yes</td>
        <td>Password (min: 8 characters)</td>
      </tr>
      <tr>
        <td>password_confirmation</td>
        <td>string</td>
        <td>Yes</td>
        <td>Must match password field</td>
      </tr>
    </tbody>
  </table>

  <h3>Response</h3>
  <pre><code>{
  "success": true,
  "message": "User registered successfully",
  "data": {
    "user": {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com",
      "created_at": "2023-01-01T00:00:00.000000Z"
    },
    "token": "eyJ0eXAiOiJKV1QiLC..."
  }
}</code></pre>

  <h3>Error Response</h3>
  <pre><code>{
  "success": false,
  "message": "Validation failed",
  "errors": {
    "email": ["The email has already been taken"],
    "password": ["The password must be at least 8 characters"]
  }
}</code></pre>
</div>
@endsection