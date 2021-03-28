<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\SpringSale;

class ProductController extends Controller
{
    private $sale;
    private $spring_sale;

    public function __construct()
    {
        $this->sale = new Sale;
        $this->spring_sale = new SpringSale;
    }

    public function sale()
    {
        $sales = $this->sale->all();
        $spring_sales = $this->spring_sale->all();
        return view('ec.sale', compact('sales', 'spring_sales'));
    }
}
