<?php

namespace App\Http\Controllers;

use App\Info;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $info;
    private $product;

    public function __construct()
    {
        $this->product = new Product;
        $this->info = new Info;
    }

    public function index()
    {
        $products = $this->product->all();
        return view('admin.index', compact('products'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $this->product->timestamps = false;
        $this->product->fill($input)->save();
        return redirect()->route('home');
    }
}
