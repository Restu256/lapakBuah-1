<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VoucherRequest;
use App\Models\Admin\Voucher;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class VoucherController extends Controller
{
       // function __construct()
    // {
    //      $this->middleware('permission:voucher-list|voucher-create|voucher-edit|voucher-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:voucher-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:voucher-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:voucher-delete', ['only' => ['destroy']]);
    // }
    public function index(Request $request)
    {
        // $data = Voucher::orderBy('id','DESC')->paginate(5);
        // return view('pages.admin.voucher.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
        $data = Voucher::all();
		// return view('pages.admin.product.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

         if (request()->ajax()) {
            $query = Voucher::all();
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
                                    <a class="dropdown-item" href="' . route('voucher.show', $item->id) . '">
                                        Show Detail
                                    </a>
                                    <form action="' . route('voucher.destroy', $item->id) . '" method="POST">
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
        return view('pages.admin.voucher.index');
        
    }
    public function create()
    {
        return view('pages.admin.voucher.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'voucher'            => 'required|max:255',
        'masa_berlaku'       => 'required|min:5|max:255',
        
        
    ]);
    
    Voucher::create($validatedData);
    if($validatedData){
        //redirect dengan pesan sukses
        return redirect()->route('voucher.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('voucher.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function edit(BlogCategory $voucher)
{
    return view('pages.admin.voucher.edit', compact('voucher'));
    // dd($voucher);
}

public function update(Request $request, Voucher $voucher)
{
    $rules = [
        'category'  => 'required',
        'image'     => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
    ];

    
    $validatedData = $request->validate($rules);

    if  ($request->file('image')) {
        if ($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('blogcategory');
        $validatedData['slug'] = $request->category;
    }
    //get data Category by ID
    Voucher::where('id', $voucher->id)->update($validatedData);


    if($voucher){
        //redirect dengan pesan sukses
        return redirect()->route('voucher.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('voucher.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy(Voucher $voucher)
{
    Voucher::destroy($voucher->id);
    return redirect()->route('voucher.index')->with(['success' => 'Category has been deleted!']);
}
}
