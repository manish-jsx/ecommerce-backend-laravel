<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        return Cache::remember('products', 60, function () {
            return Product::all();
        });
    }


    public function store(Request $request)
    {
      $user = Auth::user();

       if (!$user || !$user->is_admin) {
        return response()->json(['error' => 'Unauthorized'], 403);
        }


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $product = Product::create($request->all());

        Cache::forget('products');

        return response()->json($product, 201);
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
         $user = Auth::user();

         if (!$user || !$user->is_admin) {
              return response()->json(['error' => 'Unauthorized'], 403);
         }
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $product->update($request->all());

        Cache::forget('products');

        return response()->json($product);
    }


    public function destroy(Product $product)
     {
        $user = Auth::user();

         if (!$user || !$user->is_admin) {
          return response()->json(['error' => 'Unauthorized'], 403);
          }
         $product->delete();
         Cache::forget('products');
        return response()->json(null, 204);
    }
}