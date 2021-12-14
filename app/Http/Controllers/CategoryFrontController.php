<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\admin\ProductModel;
use Illuminate\Http\Request;

class CategoryFrontController extends Controller
{
    public function index(){
        // return view('pages.category');

        $categories = Category::all();
        $products = ProductModel::with(['imageproduct'])->paginate(32);
        return view('pages.category', [
            'categories' => $categories,
            'products' => $products
        ]); 
    }

    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        // dd($category);
        $products = ProductModel::with(['imageproduct'])->where('category_id', $category->id)->paginate(32);
        return view('pages.category', [
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'slug'  => $slug
        ]); 
    }
}
