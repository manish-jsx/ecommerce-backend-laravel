/**
 * @page Store Users
 * @description Documentation for user creation endpoint
 * 
 * This template extends the main documentation layout (docs.layout.app)
 * and contains API documentation for the store/create user endpoint.
 *
 * The documentation should include:
 * - API endpoint details
 * - Request parameters
 * - Response format
 * - Authentication requirements
 * - Example requests/responses
 * 
 * @template docs.users.store
 * @extends docs.layout.app
 */
@extends('docs.layout.app')
@section('content')
  <h1>Create New User</h1>
  
  <h2>Endpoint</h2>
  <code>POST /api/users</code>

  <h2>Authentication</h2>
  <p>Requires valid API token in Authorization header</p>

  <h2>Request Parameters</h2>
  <table class="table">
    <tr>
      <th>Parameter</th>
      <th>Type</th>
      <th>Required</th>
      <th>Description</th>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>Yes</td>
      <td>Full name of the user</td>
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
      <td>Minimum 8 characters</td>
    </tr>
  </table>

  <h2>Response</h2>
  <pre>
{
  "success": true,
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "created_at": "2023-01-01T00:00:00.000000Z"
  }
}
  </pre>
@endsection