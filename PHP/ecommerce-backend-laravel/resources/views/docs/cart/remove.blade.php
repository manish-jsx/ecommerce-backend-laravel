@extends('docs.layout.app')

@section('content')
<h2>Delete Category</h2>

<p>Delete an existing category from the system.</p>

<h3>Endpoint</h3>
<code class="block">DELETE /api/categories/{id}</code>

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
      <td>The ID of the category to delete</td>
    </tr>
  </tbody>
</table>

<h3>Response</h3>
<p>On success, returns HTTP status code 204 (No Content)</p>

<h3>Example Request</h3>
<pre><code>DELETE /api/categories/1</code></pre>

<h3>Possible Error Responses</h3>
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
      <td>Category not found</td>
    </tr>
    <tr>
      <td>403</td>
      <td>Unauthorized action</td>
    </tr>
  </tbody>
</table>
@endsection