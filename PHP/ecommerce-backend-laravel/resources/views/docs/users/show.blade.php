@extends('docs.layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>User Documentation</h2>
                </div>
                <div class="card-body">
                    <div class="documentation-section">
                        <h3>Getting Started</h3>
                        <p>Welcome to our user documentation. Here you'll find all the information you need to use our system effectively.</p>
                    </div>

                    <div class="documentation-section">
                        <h3>Account Management</h3>
                        <ul>
                            <li>Profile Settings</li>
                            <li>Security</li>
                            <li>Preferences</li>
                        </ul>
                    </div>

                    <div class="documentation-section">
                        <h3>Support</h3>
                        <p>If you need assistance, please contact our support team at support@example.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection