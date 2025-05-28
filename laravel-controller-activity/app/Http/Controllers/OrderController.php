<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer($customerId, $name, $address)
    {
        $title = 'Customer Details';
        $data = [
            'Customer ID' => $customerId,
            'Name' => $name,
            'Address' => $address,
        ];
        return view('show-details', ['data' => $data, 'title' => $title]);
    }

    public function item($itemNo, $name, $price)
    {
        $title = 'Item Details';
        $data = [
            'Item No' => $itemNo,
            'Name' => $name,
            'Price' => $price,
        ];
        return view('show-details', ['data' => $data, 'title' => $title]);
    }

    public function order($customerId, $name, $orderNo, $date)
    {
        $title = 'Order Details';
        $data = [
            'Customer ID' => $customerId,
            'Name' => $name,
            'Order No' => $orderNo,
            'Date' => $date,
        ];
        return view('show-details', ['data' => $data, 'title' => $title]);
    }

    public function orderDetails($transNo, $orderNo, $itemId, $name, $price, $qty)
    {
        $title = 'Order Transaction Details';
        $data = [
            'Transaction No' => $transNo,
            'Order No' => $orderNo,
            'Item ID' => $itemId,
            'Name' => $name,
            'Price' => $price,
            'Quantity' => $qty,
        ];
        return view('show-details', ['data' => $data, 'title' => $title]);
    }
}