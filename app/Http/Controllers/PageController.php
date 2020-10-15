<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class PageController extends Controller
{
  function index() {
    $products = Product::all();
    return view('home', compact('products'));
  }
  function add(Request $request, $id) {
    $items = array();
    if ($request->session()->has('items')) {
      $items = $request->session()->get('items');
      if (!in_array($id, $items)) {
        array_push($items, $id);
      }
    } else {
      array_push($items, $id);
    }
    $request->session()->put('items', $items);
    // $request->session()->flush();
    $products = Product::all();
    return view('home', compact('products'));
  }
  function cart(Request $request) {
    $carts = $request->session()->get('items');
    $products = [];
    for ($i = 0; $i < count($carts); $i++) {
      $product = Product::find($carts[$i]);
      array_push($products, $product);
    }
    return view('cart', compact('products'));
  }
}