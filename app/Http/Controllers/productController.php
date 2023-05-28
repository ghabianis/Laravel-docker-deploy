<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //

    public function getAllProducts(Request $request){
        $response = Product::getCachedData();
        return $response;
}  
}
