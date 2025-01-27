@extends('docs.layout.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          <h2 class="mb-0">Role Management System</h2>
        </div>
        <div class="card-body">
          <!-- Role Overview Section -->
          <div class="documentation-section mb-5">
            <h3 class="border-bottom pb-2">System Roles Overview</h3>
            <div class="role-list mt-3">
              <div class="role-item mb-3">
                <h5 class="text-primary">Admin</h5>
                <p class="text-muted">Complete system administration access with full control over all features</p>
              </div>
              <div class="role-item mb-3">
                <h5 class="text-success">Manager</h5>
                <p class="text-muted">Access to product and order management functionalities</p>
              </div>
              <div class="role-item mb-3">
                <h5 class="text-info">User</h5>
                <p class="text-muted">Standard user privileges for basic platform interaction</p>
              </div>
            </div>
          </div>

          <!-- Permissions Matrix -->
          <div class="documentation-section">
            <h3 class="border-bottom pb-2">Permission Matrix</h3>
            <div class="table-responsive mt-3">
              <table class="table table-striped table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Permission</th>
                    <th scope="col" class="text-center">Admin</th>
                    <th scope="col" class="text-center">Manager</th>
                    <th scope="col" class="text-center">User</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>View Products</td>
                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Manage Products</td>
                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                  </tr>
                  <tr>
                    <td>Manage Users</td>
                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
