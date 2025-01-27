<nav>
    <ul>
        <li><a href="{{ route('docs.index') }}">Home</a></li>
        <li><a href="{{ route('docs.auth.login') }}">Authentication</a>
            <ul>
                <li><a href="{{ route('docs.auth.login') }}">Login</a></li>
                <li><a href="{{ route('docs.auth.logout') }}">Logout</a></li>
                <li><a href="{{ route('docs.auth.me') }}">Me</a></li>
                <li><a href="{{ route('docs.auth.register') }}">Register</a></li>
            </ul>
        </li>
        <li><a href="{{ route('docs.categories.index') }}">Categories</a>
            <ul>
                <li><a href="{{ route('docs.categories.index') }}">Index</a></li>
                <li><a href="{{ route('docs.categories.show', ['category' => '1']) }}">Show</a></li>
                <li><a href="{{ route('docs.categories.store') }}">Store</a></li>
                <li><a href="{{ route('docs.categories.update', ['category' => '1']) }}">Update</a></li>
                <li><a href="{{ route('docs.categories.destroy', ['category' => '1']) }}">Destroy</a></li>
            </ul>
        </li>
        <li><a href="{{ route('docs.products.index') }}">Products</a>
            <ul>
                <li><a href="{{ route('docs.products.index') }}">Index</a></li>
                <li><a href="{{ route('docs.products.show', ['product' => '1']) }}">Show</a></li>
                <li><a href="{{ route('docs.products.store') }}">Store</a></li>
                <li><a href="{{ route('docs.products.update', ['product' => '1']) }}">Update</a></li>
                <li><a href="{{ route('docs.products.destroy', ['product' => '1']) }}">Destroy</a></li>
            </ul>
        </li>
    </ul>
</nav>