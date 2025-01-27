@extends('docs.layout.app')

@section('content')
  <h1>Store New Product</h1>

  <h2>Endpoint</h2>
  <code>POST /api/products</code>

  <h2>Headers</h2>
  <pre>
Accept: application/json
Content-Type: application/json
Authorization: Bearer {your-token}
  </pre>

  <h2>Request Body</h2>
  <pre>
{
  "name": "Product Name",
  "description": "Product Description",
  "price": 99.99,
  "stock": 100,
  "category_id": 1
}
  </pre>

  <h2>Response (201 Created)</h2>
  <pre>
{
  "data": {
    "id": 1,
    "name": "Product Name",
    "description": "Product Description",
    "price": 99.99,
    "stock": 100,
    "category_id": 1,
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
  },
  "message": "Product created successfully"
}
  </pre>

  <h2>Possible Errors</h2>
  <ul>
    <li>400 Bad Request - Invalid input data</li>
    <li>401 Unauthorized - Invalid or missing token</li>
    <li>403 Forbidden - Insufficient permissions</li>
  </ul>
@endsection