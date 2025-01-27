@extends('docs.layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Role Documentation</h2>
                </div>
                <div class="card-body">
                    <div class="role-details">
                        <h3>Role Information</h3>
                        <p>This section provides detailed information about user roles in the system.</p>

                        <h4>Available Roles</h4>
                        <ul>
                            <li><strong>Admin:</strong> Full system access with all privileges</li>
                            <li><strong>Manager:</strong> Access to manage products, orders, and users</li>
                            <li><strong>User:</strong> Basic access for shopping and managing own account</li>
                        </ul>

                        <h4>Role Permissions</h4>
                        <p>Each role comes with specific permissions that define what actions users can perform within the system.</p>
                        
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Permission</th>
                                    <th>Admin</th>
                                    <th>Manager</th>
                                    <th>User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View Products</td>
                                    <td>✓</td>
                                    <td>✓</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td>Manage Products</td>
                                    <td>✓</td>
                                    <td>✓</td>
                                    <td>✗</td>
                                </tr>
                                <tr>
                                    <td>Manage Users</td>
                                    <td>✓</td>
                                    <td>✓</td>
                                    <td>✗</td>
                                </tr>
                                <tr>
                                    <td>Manage Roles</td>
                                    <td>✓</td>
                                    <td>✗</td>
                                    <td>✗</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4>Implementation Examples</h4>
                        <div class="code-examples mt-3">
                            <h5>Blade Directive Usage</h5>
                            <pre><code>
@can('permission-name')
    // Protected content here
@endcan
                            </code></pre>

                            <h5>Controller Level Check</h5>
                            <pre><code>
if (auth()->user()->hasRole('admin')) {
    // Admin only actions
}
                            </code></pre>

                            <h5>Policy Implementation</h5>
                            <pre><code>
public function update(User $user, Product $product)
{
    return $user->hasPermissionTo('edit-products');
}
                            </code></pre>
                        </div>

                        <h4>Best Practices</h4>
                        <ul class="mt-3">
                            <li>Always use role-based access control for sensitive operations</li>
                            <li>Implement the principle of least privilege</li>
                            <li>Regularly audit role assignments</li>
                            <li>Use middleware for route protection</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection