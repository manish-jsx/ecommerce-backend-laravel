@extends('docs.layout.app')

@section('title', 'Update Role')

@section('content')
    <h1>Update Role</h1>

    <h2>Endpoint</h2>
    <pre><code>PUT /api/roles/{id}</code></pre>

    <h2>Headers</h2>
    <pre><code>Authorization: Bearer {your-token}
Content-Type: application/json
Accept: application/json</code></pre>

    <h2>URL Parameters</h2>
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
                <td>The ID of the role to update</td>
                <td>Yes</td>
            </tr>
        </tbody>
    </table>

    <h2>Request Body</h2>
    <pre><code>{
    "name": "admin",
    "description": "Administrator role",
    "permissions": [1, 2, 3]
}</code></pre>

    <h2>Response</h2>
    <pre><code>{
    "success": true,
    "data": {
        "id": 1,
        "name": "admin",
        "description": "Administrator role",
        "permissions": [
            {
                "id": 1,
                "name": "create_users"
            },
            {
                "id": 2,
                "name": "edit_users"
            },
            {
                "id": 3,
                "name": "delete_users"
            }
        ],
        "created_at": "2023-01-01T00:00:00.000000Z",
        "updated_at": "2023-01-01T00:00:00.000000Z"
    },
    "message": "Role updated successfully"
}</code></pre>

    <h2>Error Responses</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Status Code</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>401</td>
                <td>Unauthorized - Invalid or missing token</td>
            </tr>
            <tr>
                <td>403</td>
                <td>Forbidden - User doesn't have permission</td>
            </tr>
            <tr>
                <td>404</td>
                <td>Not Found - Role doesn't exist</td>
            </tr>
            <tr>
                <td>422</td>
                <td>Validation Error - Invalid input data</td>
            </tr>
        </tbody>
    </table>
@endsection