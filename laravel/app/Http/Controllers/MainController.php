<?php

namespace App\Http\Controllers;

use App\Info;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $info;
    private $product;

    public function __construct()
    {
        $this->info = new Info;
        $this->product = new Product;
    }

    public function index()
    {
        $infos = $this->info->all();
        $reverseProducts = $this->product->all()->reverse();
        return view('ec.index', compact('infos', 'reverseProducts'));
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $query = Product::query();
        $query->where('name', 'LIKE', "%{$name}%");
        $products = $query->get();
        return view('ec.search', compact('products'));
    }

    public function productShow($id)
    {
        $product = $this->product->find($id);
        $reverseProducts = $this->product->all()->reverse();
        return view('ec.productShow', compact('product', 'reverseProducts'));
    }

    public function infoShow($id)
    {
        $info = $this->info->find($id);
        return view('ec.infoShow', compact('info'));
    }
}
