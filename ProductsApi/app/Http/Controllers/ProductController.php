<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
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

    public function index() {}

    public function show($product) {}

    public function store(Request $request) {}

    public function update(Request $request, $product) {}

    public function destroy($product) {}
}
