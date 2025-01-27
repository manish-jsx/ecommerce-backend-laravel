@extends('docs.layout.app')

@section('title', 'User Documentation')

@section('content')
<div class="docs-container">
    <h1>User Documentation</h1>

    <div class="docs-section">
        <h2>Introduction</h2>
        <p>Welcome to the user documentation for our e-commerce platform. This guide will help you understand how to use and interact with various user-related features.</p>
    </div>

    <div class="docs-section">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#authentication">User Authentication</a></li>
            <li><a href="#profile">Profile Management</a></li>
            <li><a href="#orders">Order Management</a></li>
            <li><a href="#settings">Account Settings</a></li>
        </ul>
    </div>

    <div class="docs-section" id="authentication">
        <h2>User Authentication</h2>
        <p>Learn how to register, login, and manage your authentication status.</p>
    </div>

    <div class="docs-section" id="profile">
        <h2>Profile Management</h2>
        <p>Instructions for updating your profile information and managing personal details.</p>
    </div>

    <div class="docs-section" id="orders">
        <h2>Order Management</h2>
        <p>How to view, track, and manage your orders.</p>
    </div>

    <div class="docs-section" id="settings">
        <h2>Account Settings</h2>
        <p>Guide for managing your account preferences and security settings.</p>
    </div>
</div>
@endsection