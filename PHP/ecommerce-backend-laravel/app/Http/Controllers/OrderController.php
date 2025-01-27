<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class OrderController extends Controller
{
  /**
   * Display a listing of orders.
   */
  public function index()
  {
    $orders = Order::with('user')->latest()->get();
    return response()->json(['orders' => $orders], Response::HTTP_OK);
  }

  /**
   * Store a newly created order.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'user_id' => 'required|exists:users,id',
      'total_amount' => 'required|numeric',
      'status' => 'required|string'
    ]);

    $order = Order::create($validatedData);
    return response()->json(['order' => $order], Response::HTTP_CREATED);
  }

  /**
   * Display the specified order.
   */
  public function show(Order $order)
  {
    return response()->json(['order' => $order->load('user')], Response::HTTP_OK);
  }

  /**
   * Update the specified order.
   */
  public function update(Request $request, Order $order)
  {
    $validatedData = $request->validate([
      'status' => 'required|string',
      'total_amount' => 'sometimes|numeric'
    ]);

    $order->update($validatedData);
    return response()->json(['order' => $order], Response::HTTP_OK);
  }

  /**
   * Remove the specified order.
   */
  public function destroy(Order $order)
  {
    $order->delete();
    return response()->json(null, Response::HTTP_NO_CONTENT);
  }
}