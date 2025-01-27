<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = $user->orders; // Assuming the User model has a relationship with Order
        return OrderResource::collection($orders);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $order = new Order();
        $order->user_id = $user->id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->save();

        return new OrderResource($order);
    }

    public function destroy($orderId)
    {
        $user = Auth::user();
        $order = Order::where('id', $orderId)->where('user_id', $user->id)->firstOrFail();
        $order->delete();

        return response()->noContent();
    }
}