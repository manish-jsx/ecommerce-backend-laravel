@extends('docs.layout.app')

@section('title', 'Authentication Documentation')

@section('content')
<div class="container mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold mb-6">Authentication API Documentation</h1>

  <div class="space-y-6">
    <section>
      <h2 class="text-2xl font-semibold mb-4">Available Endpoints</h2>
      <ul class="list-disc pl-6 space-y-2">
        <li><a href="{{ route('docs.auth.login') }}" class="text-blue-600 hover:underline">Login</a></li>
        <li><a href="{{ route('docs.auth.register') }}" class="text-blue-600 hover:underline">Register</a></li>
        <li><a href="{{ route('docs.auth.logout') }}" class="text-blue-600 hover:underline">Logout</a></li>
        <li><a href="{{ route('docs.auth.me') }}" class="text-blue-600 hover:underline">Me</a></li>
 
      </ul>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mb-4">Authentication Flow</h2>
      <p class="text-gray-700">
        Our API uses token-based authentication. After successful login, you'll receive a token that should be included
        in the Authorization header for subsequent requests.
      </p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mb-4">Base URL</h2>
      <code class="bg-gray-100 p-2 rounded">{{ config('app.url') }}/api/v1</code>
    </section>
  </div>
</div>

@endsection