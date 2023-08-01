<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\ProductsModel;

class ProductsController extends Controller
{
    public function products() {
        return response()->json(ProductsModel::get(), 200);
    }

    public function productsById($id) {
        return response()->json(ProductsModel::find($id), 200);
    }
}
