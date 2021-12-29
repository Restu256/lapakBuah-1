<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BankAccountRequest;
use App\Models\Admin\BankAccount;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class BankController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:bank-list|bank-create|bank-edit|bank-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:bank-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:bank-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:bank-delete', ['only' => ['destroy']]);
    // }
    public function index(Request $request)
    {
        // $data = BankAccount::orderBy('id','DESC')->paginate(5);
        // return view('pages.admin.bank.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
        $data = BankAccount::all();
		// return view('pages.admin.product.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

         if (request()->ajax()) {
            $query = BankAccount::all();
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
                                    <a class="dropdown-item" href="' . route('bank.show', $item->id) . '">
                                        Show Detail
                                    </a>
                                    <form action="' . route('bank.destroy', $item->id) . '" method="POST">
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
        return view('pages.admin.bank.index');
        
    }
    public function create()
    {
        return view('pages.admin.bank.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_bank'         => 'required|max:255',
        'no_rekening'       => 'required|min:5|max:255',
        'pemilik_rekening'  => 'required|min:5|max:255',
        
    ]);
    
    BankAccount::create($validatedData);
    if($validatedData){
        //redirect dengan pesan sukses
        return redirect()->route('bank.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('bank.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function edit(BlogCategory $bank)
{
    return view('pages.admin.bank.edit', compact('bank'));
    // dd($bank);
}

public function update(Request $request, BankAccount $bank)
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
    BankAccount::where('id', $bank->id)->update($validatedData);


    if($bank){
        //redirect dengan pesan sukses
        return redirect()->route('bank.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('bank.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy(BankAccount $bank)
{
    if($bank->category) {
        Storage::delete($request->category);
    }
    BankAccount::destroy($bank->id);
    return redirect()->route('bank.index')->with(['success' => 'Category has been deleted!']);
}
}
