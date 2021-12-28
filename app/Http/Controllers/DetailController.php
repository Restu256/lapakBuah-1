<?php

namespace App\Http\Controllers;

use App\Models\admin\ProductModel;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index(Request $request, $id){
        $product = ProductModel::with(['imageproduct', 'userId'])->where('slug', $id)->firstOrFail();
        return view('pages.detail', [
            'product' => $product
        ]); 
    }

    public function add(Request $request, $id){
        $data = [
            'products_id'   => $id,
            'users_id'      => Auth::user()->id,
        ];
        Cart::create($data);
        return redirect()->route('cart.index');
    }
}
