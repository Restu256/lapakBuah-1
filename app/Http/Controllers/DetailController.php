<?php

namespace App\Http\Controllers;

use App\Models\admin\ProductModel;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $id){
        return view('pages.detail'); 

        // $product = ProductModel::with(['imageproduct', 'user'])->where('slug', $id)->firstOrFail();

        // return view('pages.detail', [
        //     'product' => $product
        // ]); 
    }
}
