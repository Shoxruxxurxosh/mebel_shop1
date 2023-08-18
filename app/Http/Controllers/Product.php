<?php

namespace App\Http\Controllers;

use App\Models\product as ModelsProduct;
use App\Models\Product as AppModelsProduct;
use App\Product as AppProduct;
use Illuminate\Http\Request;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shopList()
    {
        $products = AppProduct::all();
        return view('index',[
            'product' => $products
        ]);
    }

}
