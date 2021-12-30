<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TypeProduct;
use App\Models\Admin\ProductModel;
use App\Models\Admin\Stock;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use File;

class TypeController extends Controller
{
        // function __construct()
        // {
        //      $this->middleware('permission:typeproduct-list|typeproduct-create|typeproduct-edit|typeproduct-delete', ['only' => ['index','store']]);
        //      $this->middleware('permission:typeproduct-create', ['only' => ['create','store']]);
        //      $this->middleware('permission:typeproduct-edit', ['only' => ['edit','update']]);
        //      $this->middleware('permission:typeproduct-delete', ['only' => ['destroy']]);
        // }
        public function index(Request $request)
        {
            $data = TypeProduct::all();
            return view('pages.admin.image_product.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    
            // $data = ImageProduct::orderBy('id','DESC')->paginate(5);
            // return view('pages.admin.image_product.index',compact('data'))
            //     ->with('i', ($request->input('page', 1) - 1) * 5);
    
            if (request()->ajax()) {
                $query = TypeProduct::all();
                return DataTables::of($query)
                    ->addColumn('action', function ($item) {
                        return '
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                        type="button" id="action' .  $item->id . '"
                                            data-toggle="dropdown" 
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            Aksi
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '" style="border-radius:10px 0px 10px 10px; margin:10px;">
                                        <a class="dropdown-item" href="' . route('imageproduct.edit', $item->id) . '">
                                            Sunting
                                        </a>
                                        <form action="' . route('imageproduct.destroy', $item->id) . '" method="POST">
                                            ' . method_field('delete') . csrf_field() . '
                                            <button type="submit" class="dropdown-item text-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                        </div>';
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make();
            }
            return view('pages.admin.type_product.index');
        }
        
        public function create()
        {
            $product = ProductModel::get();
            return view('pages.admin.type_product.create', ['product' => $product]);
            // return view('pages.admin.image_product.create');
        }
        
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'product_id'    => 'required|integer',
                'type_products' => 'required',
                'satuan'        => 'required',
                'harga_beli'    => 'required|integer',
                'harga_jual'    => 'required|integer',
                'qty'           => 'required|integer',
                'berat'         => 'required|integer',
                'diskon'        => 'required|integer',
        ]);

        $data = $request->all();   
        $insert = TypeProduct::create($data);
        $Stock = $request->validate([
            'products_id' => $insert->product_id,
            'first_stock' => $insert->qty,
            'product_in'  => $insert->qty,
            'product_out' => $insert->qty,
            'final_stock' => $insert->qty,
            
        ]);
        Stock::create($Stock);
        if($insert){
            //redirect dengan pesan sukses
            return redirect()->route('product.show')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('product.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
                
    public function edit(TypeProduct $typeproduct)
    {
        return view('pages.admin.image_product.edit', compact('typeproduct'));
    }
    
    public function update(Request $request, TypeProduct $typeproduct)
    {
        $rules = [
            'image' => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
            'name'  => 'required',
        ];
        
        $validatedData = $request->validate($rules);
    
        if  ($request->file('image')) {
            if ($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('product');
        }
        //get data Image Product by ID
        $update = TypeProduct::where('id', $typeproduct->id)->update($validatedData);
    
        if($update){
            //redirect dengan pesan sukses
            return redirect()->route('typeproduct.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('typeproduct.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    public function destroy($id)
    {
        $data = TypeProduct::where('id',$id)->first();
        Storage::delete($data->oldImage);
     
        // hapus data
        TypeProduct::where('id',$id)->delete();
     
        return redirect()->back();
    
    
    }
}
