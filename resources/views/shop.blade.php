<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce Store</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-800">E-Store</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Shop</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Categories</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-gray-50 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-16 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            Welcome to <span class="text-indigo-600">E-Store</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Discover amazing products at incredible prices. Shop with confidence and enjoy our premium service.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Featured Products</h2>
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @for ($i = 1; $i <= 4; $i++)
                <div class="group">
                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300" alt="Product image" class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Product {{ $i }}</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$99.99</p>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Why Choose Us</h2>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="text-center">
                        <div class="text-indigo-600 text-5xl mb-4">📦</div>
                        <h3 class="text-lg font-medium text-gray-900">Free Shipping</h3>
                        <p class="mt-2 text-gray-500">On orders over $100</p>
                    </div>
                    <div class="text-center">
                        <div class="text-indigo-600 text-5xl mb-4">🔒</div>
                        <h3 class="text-lg font-medium text-gray-900">Secure Payments</h3>
                        <p class="mt-2 text-gray-500">100% secure checkout</p>
                    </div>
                    <div class="text-center">
                        <div class="text-indigo-600 text-5xl mb-4">💫</div>
                        <h3 class="text-lg font-medium text-gray-900">24/7 Support</h3>
                        <p class="mt-2 text-gray-500">Ready to help anytime</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">About Us</h3>
                    <p class="text-gray-400">Your trusted online shopping destination for quality products.</p>
                </div>
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Shop</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Contact Info</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: info@estore.com</li>
                        <li>Phone: (123) 456-7890</li>
                        <li>Address: 123 Store Street</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Newsletter</h3>
                    <form class="mt-4">
                        <input type="email" placeholder="Enter your email" class="w-full px-3 py-2 rounded-md">
                        <button class="mt-2 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-400">&copy; 2023 E-Store. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>