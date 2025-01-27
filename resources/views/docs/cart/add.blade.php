@extends('docs.layout.app')

@section('content')
  <h2>Store New Category</h2>

  <p>Create a new category in the system.</p>

  <h3>Endpoint</h3>
  <code>POST /api/categories</code>

  <h3>Headers</h3>
  <pre>
Accept: application/json
Content-Type: application/json
Authorization: Bearer {your-token}
  </pre>

  <h3>Request Body</h3>
  <pre>
{
  "name": "string",
  "description": "string",
  "parent_id": "integer|null"
}
  </pre>

  <h3>Response</h3>
  <h4>Success (201 Created)</h4>
  <pre>
{
  "data": {
    "id": 1,
    "name": "Category Name",
    "description": "Category Description",
    "parent_id": null,
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
  },
  "message": "Category created successfully"
}
  </pre>

  <h4>Error (422 Unprocessable Entity)</h4>
  <pre>
{
  "message": "The given data was invalid.",
  "errors": {
    "name": [
      "The name field is required."
    ]
  }
}
  </pre>
@endsection