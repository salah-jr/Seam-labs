<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderContract;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(OrderContract $type)
    {
        return $type->createOrder();
    }
}
