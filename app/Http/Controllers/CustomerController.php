<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;



class CustomerController extends Controller
{
    public function totalorder()
    {

        //  I use this as sample to check I can get both tables

        //   $customers = Customer::with('orders')->get();
        //   $orders = Order::with('customer')->get();

        //   return view('customers.total_order', compact('customers', 'orders'));

        $customers = Customer::select('customers.customerNumber', 'customers.contactFirstName')
            ->join('orders', 'customers.customerNumber', '=', 'orders.customerNumber')
            ->selectRaw('COUNT(orders.orderNumber) as total_order')
            ->groupBy('customers.customerNumber', 'customers.contactFirstName')
            ->orderByDesc('total_order')
            ->first();

        return view('customers.total_order', compact('customers'));
    }


    public function topSpender()
    {
        // Joining
        $customers = Customer::select('customers')
            ->join('orders', 'customers.customerNumber', '=', 'orders.customerNumber')
            ->join('orderdetails', 'orders.orderNumber', '=', 'orderdetails.orderNumber')
            ->select('customers.customerNumber', 'customers.contactFirstName', 'customers.contactLastName')
            ->selectRaw('SUM(orderdetails.priceEach * orderdetails.quantityOrdered) as total_spent')
            ->groupBy('customers.customerNumber', 'customers.contactFirstName', 'customers.contactLastName')
            ->orderByDesc('total_spent')
            ->first();

            

            return view('customers.spender', compact('customers'));
    

    }

        
}
