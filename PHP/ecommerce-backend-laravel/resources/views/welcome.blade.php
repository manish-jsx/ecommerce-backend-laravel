<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce API Documentation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 6rem 0;
            text-align: center;
        }
        .feature-card {
            padding: 2rem;
            border-radius: 1rem;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .cta-button {
            padding: 1rem 2rem;
            font-size: 1.2rem;
            border-radius: 2rem;
            background: #4c1d95;
            color: white;
            border: none;
            transition: all 0.3s ease;
        }
        .cta-button:hover {
            background: #5b21b6;
            transform: scale(1.05);
            color: white;
        }
        .tech-stack-icon {
            width: 50px;
            height: 50px;
            margin: 10px;
        }
        .feature-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 15px;
        }
        .tech-card {
            background: #f8fafc;
            padding: 2rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        .section-heading {
            color: #4c1d95;
            margin-bottom: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4c1d95;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">E-Commerce API</a>
            @auth
                <div class="ms-auto">
                    <span class="navbar-text me-3 text-white">{{ Auth::user()->name }}</span>
                    <form class="d-inline" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                    </form>
                </div>
            @endauth
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">E-Commerce API Documentation</h1>
            <p class="lead mb-5">Comprehensive documentation for our powerful e-commerce platform API</p>
            <a href="/docs" class="cta-button text-decoration-none">Explore Documentation</a>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-heading">Powered by Industry-Leading Technologies</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="tech-card">
                        <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" class="tech-stack-icon">
                        <h4>Laravel 10</h4>
                        <p>Modern PHP Framework</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tech-card">
                        <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="MySQL" class="tech-stack-icon">
                        <h4>MySQL</h4>
                        <p>Robust Database</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tech-card">
                        <img src="https://jwt.io/img/pic_logo.svg" alt="JWT" class="tech-stack-icon">
                        <h4>JWT Auth</h4>
                        <p>Secure Authentication</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tech-card">
                        <img src="https://www.docker.com/sites/default/files/d8/2019-07/vertical-logo-monochromatic.png" alt="Docker" class="tech-stack-icon">
                        <h4>Docker</h4>
                        <p>Containerization</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-heading">Enterprise-Grade Security</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <img src="https://www.svgrepo.com/show/200961/shield-security.svg" alt="Security" class="feature-icon">
                        <h3 class="h4 mb-3">OAuth 2.0</h3>
                        <p>Industry-standard protocol for authorization</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <img src="https://www.svgrepo.com/show/200961/shield-security.svg" alt="Encryption" class="feature-icon">
                        <h3 class="h4 mb-3">Data Encryption</h3>
                        <p>AES-256 encryption for sensitive data</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <img src="https://www.svgrepo.com/show/200961/shield-security.svg" alt="CSRF" class="feature-icon">
                        <h3 class="h4 mb-3">CSRF Protection</h3>
                        <p>Cross-Site Request Forgery prevention</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E-commerce Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-heading">Comprehensive E-commerce Features</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-card">
                        <h3 class="h4 mb-3">Shopping Cart</h3>
                        <ul class="list-unstyled">
                            <li>Real-time updates</li>
                            <li>Guest cart storage</li>
                            <li>Multi-currency support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <h3 class="h4 mb-3">Payment Integration</h3>
                        <ul class="list-unstyled">
                            <li>Stripe Integration</li>
                            <li>PayPal Ready</li>
                            <li>Multiple payment methods</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <h3 class="h4 mb-3">Order Management</h3>
                        <ul class="list-unstyled">
                            <li>Order tracking</li>
                            <li>Invoice generation</li>
                            <li>Status updates</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <h3 class="h4 mb-3">Analytics</h3>
                        <ul class="list-unstyled">
                            <li>Sales reporting</li>
                            <li>Customer insights</li>
                            <li>Inventory tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">© 2025 E-Commerce API. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

