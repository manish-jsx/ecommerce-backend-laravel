<?php

namespace App\Http\Controllers;

class DocsController extends Controller
{
    public function index()
    {
        return view('docs.index');
    }
//  DocsController::authIndex
    public function authIndex()
    {
        return view('docs.auth.index');
    }

    public function authLogin()
    {
        return view('docs.auth.login');
    }

    public function authRegister()
    {
        return view('docs.auth.register');
    }

    public function authLogout()
    {
        return view('docs.auth.logout');
    }

    public function authMe()
    {
        return view('docs.auth.me');
    }

    // Products Documentation Methods
    public function productsIndex()
    {
        return view('docs.products.index');
    }

    public function productsStore()
    {
        return view('docs.products.store');
    }

    public function productsUpdate()
    {
        return view('docs.products.update');
    }

    public function productsDestroy()
    {
        return view('docs.products.destroy');
    }

    // Categories Documentation Methods
    public function categories()
    {
        return view('docs.categories.index');
    }

    public function categoriesShow()
    {
        return view('docs.categories.show');
    }

    public function categoriesStore()
    {
        return view('docs.categories.store');
    }

    public function categoriesUpdate()
    {
        return view('docs.categories.update');
    }

    public function categoriesDestroy()
    {
        return view('docs.categories.destroy');
    }


    // Orders Documentation Methods
    public function orders()
    {
        return view('docs.orders.index');
    }

    public function ordersShow()
    {
        return view('docs.orders.show');
    }

    public function ordersStore()
    {
        return view('docs.orders.store');
    }

    public function ordersUpdate()
    {
        return view('docs.orders.update');
    }

    public function ordersDestroy()
    {
        return view('docs.orders.destroy');
    }

    // Users Documentation Methods
    public function users()
    {
        return view('docs.users.index');
    }

    // Roles Documentation Methods
    public function roles()
    {
        return view('docs.roles.index');
    }

    public function rolesShow()
    {
        return view('docs.roles.show');
    }

    public function rolesStore()
    {
        return view('docs.roles.store');
    }

    public function rolesUpdate()
    {
        return view('docs.roles.update');
    }

    public function rolesDestroy()
    {
        return view('docs.roles.destroy');
    }

    // Cart Documentation Methods
    public function cart()
    {
        return view('docs.cart.index');
    }

    public function cartShow()
    {
        return view('docs.cart.show');
    }

    public function cartStore()
    {
        return view('docs.cart.add');
    }

    public function cartUpdate()
    {
        return view('docs.cart.update');
    }

    public function cartDestroy()
    {
        return view('docs.cart.remove');
    }


    // users

    public function usersIndex()
    {
        return view('docs.users.index');
    }

    public function usersShow()
    {
        return view('docs.users.show');
    }

    public function usersStore()
    {
        return view('docs.users.store');
    }

    public function usersUpdate()
    {
        return view('docs.users.update');
    }

    public function usersDestroy()
    {
        return view('docs.users.destroy');
    }



        





    // Permissions Documentation Methods

    public function permissions()
    {
        return view('docs.permissions.index');
    }

    public function permissionsShow()
    {
        return view('docs.permissions.show');
    }

    public function permissionsUpdate()
    {
        return view('docs.permissions.update');
    }


    public function productsShow()
    {
        return view('docs.products.show');
    }



}