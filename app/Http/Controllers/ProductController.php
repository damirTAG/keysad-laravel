<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Получаем все товары

        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id); // Получаем товар по идентификатору

        return view('products.show', ['product' => $product]);
    }
}
