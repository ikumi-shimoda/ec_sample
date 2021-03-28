<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Product;

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
        $products = $this->product->all();
        return view('ec.index', compact('infos', 'products'));
    }
}
