<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){}

    public function show($order){}

    public function store(Request $request){}

    public function update(Request $request, $order){}

    public function destroy($order){}
}
