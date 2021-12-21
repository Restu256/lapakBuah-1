<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
use App\Models\Admin\Stock;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class StockController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:stock-list|stock-create|stock-edit|stock-delete', ['only' => ['index','store']]);
         $this->middleware('permission:stock-create', ['only' => ['create','store']]);
         $this->middleware('permission:stock-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:stock-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Stock::with('product')->orderBy('id','DESC')->paginate(5);
        return view('pages.admin.stock.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
        // $data = Stock::all();
		// return view('pages.Admin.stock.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

        // if (request()->ajax()) {
        //     $query = Stock::all();
        //     // dd($query);
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
        //                             <a class="dropdown-item" href="' . route('stock.edit', $item->id) . '">
        //                                 Sunting
        //                             </a>
        //                             <form action="' . route('stock.destroy', $item->id) . '" method="POST">
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
        // return view('pages.admin.stock.index');
        
    }

    public function create()
    {
        $product = ProductModel::get();
        return view('pages.admin.stock.create', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'products_id'   => 'required',
            'first_stock'   => 'required',
            'products_in'   => 'required',
            'products_out'  => 'required',
            'final_stock'=> 'required',
            ]);

        $data = $request->all();
        
        $dd = Stock::create($validatedData);
        if($validatedData){
            //redirect dengan pesan sukses
            return redirect()->route('stock.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('stock.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function show($id)
    {
        $data = ProductModel::findOrFail($id);

        return view('pages.admin.product.show', [
            'data'=>$data
        ]);            
         
    }
public function edit($id)
{
    $product = ProductModel::all();
    $stock = Stock::findOrFail($id);
    return view('pages.admin.stock.edit', [
        'product'=>$stock,
        'product'=>$product
    ]);
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'products_id'   => 'required|integer',
        'first_stock'   => 'required|integer',
        'products_in'   => 'required',
        'products_out'  => 'required',
        'final_products'=> 'required',
    ]);

    $data = $request->all();
    $item = Stock::findOrFail($id);

    $update = $item->update($data);


    if($update){
        //redirect dengan pesan sukses
        return redirect()->route('stock.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('stock.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}


}
