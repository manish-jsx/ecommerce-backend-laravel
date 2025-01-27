@extends('docs.layout.app')

@section('content')
<div class="docs-content">
  <h1>Update Permission</h1>

  <p>Endpoint to update an existing permission.</p>

  <h2>HTTP Request</h2>
  <pre><code>PUT /api/permissions/{id}</code></pre>

  <h2>URL Parameters</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>id</td>
        <td>The ID of the permission to update</td>
      </tr>
    </tbody>
  </table>

  <h2>Request Body</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Type</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>name</td>
        <td>string</td>
        <td>The name of the permission</td>
      </tr>
      <tr>
        <td>description</td>
        <td>string</td>
        <td>Description of the permission (optional)</td>
      </tr>
    </tbody>
  </table>

  <h2>Example Request</h2>
  <pre><code>{
  "name": "edit-products",
  "description": "Can edit product details"
}</code></pre>

  <h2>Response</h2>
  <pre><code>{
  "success": true,
  "data": {
    "id": 1,
    "name": "edit-products",
    "description": "Can edit product details",
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
  },
  "message": "Permission updated successfully"
}</code></pre>
</div>
@endsection