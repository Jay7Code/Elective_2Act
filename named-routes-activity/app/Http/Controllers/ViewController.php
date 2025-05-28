<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showCustomer()
    {
        return view('customer');
    }

    public function showItem()
    {
        return view('item');
    }

    public function showOrder()
    {
        return view('order');
    }

    public function showOrderDetails()
    {
        return view('orderDetails');
    }
}