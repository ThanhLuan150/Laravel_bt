<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $response = Http::get('https://63a5721a318b23efa793a770.mockapi.io/api/produce/');
        $products = $response->json();

        return view('products.index', compact('products'));
    }
}
