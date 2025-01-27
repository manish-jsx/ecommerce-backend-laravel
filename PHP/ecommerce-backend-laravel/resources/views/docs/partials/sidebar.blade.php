<div class="docs-sidebar">
  <nav>
    <ul class="nav flex-column" style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
      <!-- Introduction -->
      <li class="nav-item">
        <a href="{{ route('docs.index') }}" class="nav-link {{ request()->routeIs('docs.index') ? 'active' : '' }}" 
           style="color: #2c3e50; font-weight: bold;">
          📚 Introduction
        </a>
      </li>
      
      <!-- Authentication -->
      <li class="nav-item">
        <a href="{{ route('docs.auth.index') }}" class="nav-link {{ request()->routeIs('docs.auth.*') ? 'active' : '' }}"
           style="color: #e74c3c; font-weight: bold;">
          🔐 Authentication
        </a>
        <ul class="nav flex-column ml-4" style="border-left: 2px solid #e74c3c; padding-left: 10px;">
          <li class="nav-item">
            <a href="{{ route('docs.auth.login') }}" class="nav-link {{ request()->routeIs('docs.auth.login') ? 'active' : '' }}"
               style="color: #666;">
              POST /api/auth/login
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('docs.auth.register') }}" class="nav-link {{ request()->routeIs('docs.auth.register') ? 'active' : '' }}"
               style="color: #666;">
              POST /api/auth/register
            </a>
          </li>
        </ul>
      </li>

      <!-- Products -->
      <li class="nav-item">
        <a href="{{ route('docs.products.index') }}" class="nav-link {{ request()->routeIs('docs.products.*') ? 'active' : '' }}"
           style="color: #27ae60; font-weight: bold;">
          📦 Products
        </a>
        <ul class="nav flex-column ml-4" style="border-left: 2px solid #27ae60; padding-left: 10px;">
          <li class="nav-item">
            <a href="{{ route('docs.products.show') }}" class="nav-link" style="color: #666;">
              GET /api/products
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('docs.products.show') }}" class="nav-link" style="color: #666;">
              GET /api/products/{id}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('docs.products.store') }}" class="nav-link" style="color: #666;">
              POST /api/products
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('docs.products.update') }}" class="nav-link" style="color: #666;">
              PUT /api/products/{id}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('docs.products.destroy') }}" class="nav-link" style="color: #666;">
              DELETE /api/products/{id}
            </a>
          </li>
        </ul>
      </li>

      <!-- Orders -->
      <li class="nav-item">
        <a href="{{ route('docs.orders.index') }}" class="nav-link {{ request()->routeIs('docs.orders.*') ? 'active' : '' }}"
           style="color: #f39c12; font-weight: bold;">
          🛒 Orders
        </a>
        <ul class="nav flex-column ml-4" style="border-left: 2px solid #f39c12; padding-left: 10px;">
          <li class="nav-item">
            <a href="{{ route('docs.orders.show') }}" class="nav-link" style="color: #666;">
              GET /api/orders
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('docs.orders.show') }}" class="nav-link" style="color: #666;">
              GET /api/orders/{id}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('docs.orders.store') }}" class="nav-link" style="color: #666;">
              POST /api/orders
            </a>
          </li>
        </ul>
      </li>

      <!-- Add similar styling for other sections -->
    <!-- Cart -->
    <li class="nav-item">
      <a href="{{ route('docs.cart.index') }}" class="nav-link {{ request()->routeIs('docs.cart.*') ? 'active' : '' }}"
         style="color: #9b59b6; font-weight: bold;">
        🛍️ Cart
      </a>
      <ul class="nav flex-column ml-4" style="border-left: 2px solid #9b59b6; padding-left: 10px;">
        <li class="nav-item">
      <a href="{{ route('docs.cart.show') }}" class="nav-link" style="color: #666;">
        GET /api/cart
      </a>
        </li>
        <li class="nav-item">
      <a href="{{ route('docs.cart.add') }}" class="nav-link" style="color: #666;">
        POST /api/cart/add
      </a>
        </li>
        <li class="nav-item">
      <a href="{{ route('docs.cart.update') }}" class="nav-link" style="color: #666;">
        PUT /api/cart/update
      </a>
        </li>
        <li class="nav-item">
      <a href="{{ route('docs.cart.remove') }}" class="nav-link" style="color: #666;">
        DELETE /api/cart/remove
      </a>
        </li>
      </ul>
    </li>

    <!-- Categories -->
    <li class="nav-item">
      <a href="{{ route('docs.categories.index') }}" class="nav-link {{ request()->routeIs('docs.categories.*') ? 'active' : '' }}"
         style="color: #3498db; font-weight: bold;">
        📑 Categories
      </a>
      <ul class="nav flex-column ml-4" style="border-left: 2px solid #3498db; padding-left: 10px;">
        <li class="nav-item">
      <a href="{{ route('docs.categories.index') }}" class="nav-link" style="color: #666;">
        GET /api/categories
      </a>
        </li>
        <li class="nav-item">
      <a href="{{ route('docs.categories.show') }}" class="nav-link" style="color: #666;">
        GET /api/categories/{id}
      </a>
        </li>
      </ul>
    </li>

    <!-- Users -->
    <li class="nav-item">
      <a href="{{ route('docs.users.index') }}" class="nav-link {{ request()->routeIs('docs.users.*') ? 'active' : '' }}"
         style="color: #e67e22; font-weight: bold;">
        👤 Users
      </a>
      <ul class="nav flex-column ml-4" style="border-left: 2px solid #e67e22; padding-left: 10px;">
        <li class="nav-item">
      <a href="{{ route('docs.users.index') }}" class="nav-link" style="color: #666;">
        GET /api/users
      </a>
        </li>
        <li class="nav-item">
      <a href="{{ route('docs.users.show') }}" class="nav-link" style="color: #666;">
        GET /api/users/{id}
      </a>
        </li>
      </ul>
      
    </ul>
  </nav>
</div>

<style>
.nav-link.active {
  background-color: #eee !important;
  border-radius: 4px;
}

.nav-link:hover {
  background-color: #f5f5f5;
  border-radius: 4px;
  transition: all 0.3s ease;
}
</style>
