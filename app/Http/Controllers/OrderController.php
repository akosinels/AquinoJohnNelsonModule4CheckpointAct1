<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showCustomer($customerId, $name, $address)
    {
        return view('customerDetail', [ // Reuses view from Activity 2
            'customerId' => $customerId,
            'customerName' => $name,
            'customerAddress' => $address
        ]);
    }

    
    public function showItem($itemNo, $name, $price)
    {
        return view('itemDetail', [ // Reuses view from Activity 2
            'itemNo' => $itemNo,
            'itemName' => $name,
            'itemPrice' => $price
        ]);
    }

    
    public function showOrder($customerId, $name, $orderNo, $date)
    {
        // Note: Using 'orderParamDetail.blade.php' from Activity 2
        return view('orderParamDetail', [
            'customerId' => $customerId,
            'customerName' => $name,
            'orderNo' => $orderNo,
            'orderDate' => $date
        ]);
    }

    
    public function showOrderDetails($transNo, $orderNo, $itemId, $name, $price, $qty)
    {
        // Note: Using 'orderDetailsParamView.blade.php' from Activity 2
        return view('orderDetailsParamView', [
            'transNo' => $transNo,
            'orderNo' => $orderNo,
            'itemId' => $itemId,
            'itemName' => $name,
            'itemPrice' => $price,
            'quantity' => $qty
        ]);
    }
}