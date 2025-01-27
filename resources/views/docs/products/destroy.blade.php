@extends('docs.layout.app')

@section('content')
<div class="docs-content">
  <h1>Delete Product</h1>
  
  <p>Endpoint to delete an existing product from the system.</p>

  <h2>DELETE /api/products/{id}</h2>

  <h3>Parameters</h3>
  <table class="table">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Type</th>
        <th>Description</th>
        <th>Required</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>id</td>
        <td>integer</td>
        <td>The ID of the product to delete</td>
        <td>Yes</td>
      </tr>
    </tbody>
  </table>

  <h3>Response</h3>
  <pre><code>
{
  "message": "Product deleted successfully"
}
  </code></pre>

  <h3>Error Responses</h3>
  <pre><code>
{
  "error": "Product not found"
}
  </code></pre>
</div>
@endsection