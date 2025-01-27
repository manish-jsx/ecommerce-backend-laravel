@extends('docs.layout.app')

@section('title', 'Orders API Documentation')

@section('content')
  <h1>Orders API Documentation</h1>

  <!-- GET Orders Endpoint -->
  <div class="endpoint">
    <h2><span class="method get">GET</span> /api/orders</h2>
    <p>Retrieves a list of all orders.</p>

    <h3>Request Headers</h3>
    <pre><code class="language-json">
{
  "Authorization": "Bearer {token}",
  "Accept": "application/json"
}
    </code></pre>

    <h3>Response (200 OK)</h3>
    <pre><code class="language-json">
{
  "data": [
    {
      "id": 1,
      "user_id": 1,
      "total": 100,
      "status": "pending",
      "created_at": "2021-08-01T00:00:00.000000Z",
      "updated_at": "2021-08-01T00:00:00.000000Z",
      "products": [
        {
          "id": 1,
          "name": "Product 1",
          "price": 50,
          "pivot": {
            "order_id": 1,
            "product_id": 1,
            "quantity": 2
          }
        },
        {
          "id": 2,
          "name": "Product 2",
          "price": 50,
          "pivot": {
            "order_id": 1,
            "product_id": 2,
            "quantity": 1
          }
        }
      ]
    }
  ]
}
    </code></pre>
  </div>

  <!-- POST Orders Endpoint -->
  <div class="endpoint">
    <h2><span class="method post">POST</span> /api/orders</h2>
    <p>Creates a new order.</p>

    <h3>Request Headers</h3>
    <pre><code class="language-json">
{
  "Authorization": "Bearer {token}",
  "Accept": "application/json",
  "Content-

Type": "application/json"
}
    </code></pre>

    <h3>Request Body</h3>
    <pre><code class="language-json">
{
  "products": [
    {
      "id": 1,
      "quantity": 2
    },
    {
      "id": 2,
      "quantity": 1
    }
  ]
}
    </code></pre>

    <h3>Response (201 Created)</h3>
    <pre><code class="language-json">
{
  "data": {
    "id": 2,
    "user_id": 1,
    "total": 150,
    "status": "pending",
    "created_at": "2021-08-02T00:00:00.000000Z",
    "updated_at": "2021-08-02T00:00:00.000000Z",
    "products": [
      {
        "id": 1,
        "name": "Product 1",
        "price": 50,
        "pivot": {
          "order_id": 2,
          "product_id": 1,
          "quantity": 2
        }
      },
      {
        "id": 2,
        "name": "Product 2",
        "price": 50,
        "pivot": {
          "order_id": 2,
          "product_id": 2,
          "quantity": 1
        }
      }
    ]
  }
}
    </code></pre>

    <h3>Error Response (422 Unprocessable Entity)</h3>
    <pre><code class="language-json">
{
  "message": "The given data was invalid.",
  "errors": {
    "products.0.id": [
      "The products.0.id field is required."
    ]
  }
}
    </code></pre>
  </div>
@endsection

