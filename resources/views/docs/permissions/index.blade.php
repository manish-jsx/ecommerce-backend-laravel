@extends('docs.layout.app')

@section('title', 'Permissions Documentation')

@section('content')
<div class="container mx-auto py-6">
  <div class="mb-6">
    <h1 class="text-3xl font-bold">Permissions Documentation</h1>
    <p class="text-gray-600 mt-2">Overview of system permissions and access control</p>
  </div>

  <div class="grid gap-6">
    <!-- Permission Types -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-4">Permission Types</h2>
      <ul class="list-disc pl-6">
        <li>View - Allows users to view specific resources</li>
        <li>Create - Allows users to create new resources</li>
        <li>Edit - Allows users to modify existing resources</li>
        <li>Delete - Allows users to remove resources</li>
        <li>Manage - Full control over resources</li>
      </ul>
    </div>

    <!-- Role-Based Access -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-4">Role-Based Access Control</h2>
      <p>Users are assigned roles which contain specific permissions:</p>
      <ul class="list-disc pl-6 mt-2">
        <li>Admin - Full system access</li>
        <li>Manager - Department level access</li>
        <li>User - Basic access rights</li>
        <li>Guest - Limited view access</li>
      </ul>
    </div>

    <!-- Usage Examples -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h2 class="text-xl font-semibold mb-4">Usage Examples</h2>
      <pre class="bg-gray-100 p-4 rounded">
@can('create-post')
  <!-- Create post functionality -->
@endcan

@hasRole('admin')
  <!-- Admin specific content -->
@endhasRole</pre>
    </div>
  </div>
</div>
@endsection