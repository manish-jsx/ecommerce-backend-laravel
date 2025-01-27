@extends('docs.layout.app')

@section('content')
  <h2>Delete Role</h2>

  <p>Delete an existing role from the system.</p>

  <h3>Endpoint</h3>
  <code>DELETE /api/roles/{id}</code>

  <h3>URL Parameters</h3>
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
        <td>id</td>
        <td>integer</td>
        <td>The ID of the role to delete</td>
      </tr>
    </tbody>
  </table>

  <h3>Response</h3>
  <pre><code>
{
  "message": "Role deleted successfully"
}
  </code></pre>

  <h3>Error Responses</h3>
  <table class="table">
    <thead>
      <tr>
        <th>Status Code</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>404</td>
        <td>Role not found</td>
      </tr>
      <tr>
        <td>403</td>
        <td>Unauthorized action</td>
      </tr>
    </tbody>
  </table>
@endsection