<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index($orderId)
    {
        return OrderItem::where('order_id', $orderId)->get();
    }

    public function store(Request $request, $orderId)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $orderItem = OrderItem::create([
            'order_id' => $orderId,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json($orderItem, 201);
    }

    public function destroy($orderId, $itemId)
    {
        $orderItem = OrderItem::where('order_id', $orderId)->where('id', $itemId)->firstOrFail();
        $orderItem->delete();

        return response()->json(null, 204);
    }
}