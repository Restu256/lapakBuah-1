<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
use App\Models\Admin\Category;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','store']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = ProductModel::all();
		return view('pages.admin.product.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

        //  if (request()->ajax()) {
        //     $query = ProductModel::all();
        //     return DataTables::of($query)
        //         ->addColumn('action', function ($item) {
        //             return '
        //                 <div class="btn-group">
        //                     <div class="dropdown">
        //                         <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
        //                             type="button" id="action' .  $item->id . '"
        //                                 data-toggle="dropdown" 
        //                                 aria-haspopup="true"
        //                                 aria-expanded="false">
        //                                 Aksi
        //                         </button>
        //                         <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '" style="border-radius:10px 0px 10px 10px; margin:10px;">
        //                             <a class="dropdown-item" href="' . route('product.edit', $item->id) . '">
        //                                 Sunting
        //                             </a>
        //                             <form action="' . route('product.destroy', $item->id) . '" method="POST">
        //                                 ' . method_field('delete') . csrf_field() . '
        //                                 <button type="submit" class="dropdown-item text-danger">
        //                                     Hapus
        //                                 </button>
        //                             </form>
        //                         </div>
        //                     </div>
        //             </div>';
        //         })
        //         ->rawColumns(['action'])
        //         ->addIndexColumn()
        //         ->make();
        // }
        // return view('pages.admin.product.index');
        
        // $data = ProductModel::with('category_products')->orderBy('id','DESC')->paginate(5);
        // return view('pages.admin.product.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $category = Category::get();
        return view('pages.admin.product.create', ['category' => $category]);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_product'  => 'required|max:255',
        'category_id'   => 'required',
        'satuan'        => 'required',
        'harga_beli'    => 'required',
        'harga_jual'    => 'required',
        'qty'           => 'required',
        'berat'         => 'required',
        'diskon'        => 'required',
        'description'   => 'required',
        'slug'          => 'required'
    ]);

    
    ProductModel::create($validatedData);
    if($validatedData){
        //redirect dengan pesan sukses
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('product.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}
public function show($id)
{
$product = ProductModel::where('id', $id)->first();
if ($product) {
$data = array('title' => $product->nama_product,
'product' => $product);
return view('pages.admin.product.show', $data);            
} else {
// kalo produk ga ada, jadinya tampil halaman tidak ditemukan (error 404)
return abort('404');
}  
}
public function edit(ProductModel $product)
{
    return view('pages.admin.product.edit', compact('product'));
}

public function update(Request $request, ProductModel $product)
{
    $rules = [
        'product_id'     => 'required',
        'image'          => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
        ];

    
    $validatedData = $request->validate($rules);

    if  ($request->file('image')) {
        if ($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('product');
    }
    //get data Category by ID
    ProductModel::where('id', $product->id)->update($validatedData);


    if($product){
        //redirect dengan pesan sukses
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('product.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy(Category $category)
{
    if($category->image_category) {
        Storage::delete($request->image_category);
    }
    Category::destroy($category->id);
    return redirect()->route('category.index')->with(['success' => 'Category has been deleted!']);
}
}