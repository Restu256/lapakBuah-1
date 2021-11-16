<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use Illuminate\Http\Request;
use App\Models\Admin\Supplier;
use Yajra\DataTables\Facades\DataTables;

class SupplierController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:supplier-list|supplier-create|supplier-edit|supplier-delete', ['only' => ['index','store']]);
         $this->middleware('permission:supplier-create', ['only' => ['create','store']]);
         $this->middleware('permission:supplier-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:supplier-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Supplier::all();
            // dd($query);
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
                                    <a class="dropdown-item" href="' . route('supplier.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('supplier.destroy', $item->id) . '" method="POST">
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
        return view('pages.admin.suppliers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Supplier::count();
        // dd($data);
        if ($data == 0) {
            $kode = 'S-1001';
        }else{
            $max_kode = Supplier::query()->max('kode_supplier');
            $pecah_kode = explode('-', $max_kode);
            $set_int = intval($pecah_kode[1]);
            // dd($pecah_kode);
            $kode = $pecah_kode[0].'-'.$set_int+1;
            // dd($kode);
        }
        return view('pages.admin.suppliers.create', [
            'kode'  => $kode
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        $data = $request->all();

        $msg = Supplier::create($data);

        if ($msg) {
            return redirect()->route('supplier.index')->with(['success' => 'Data Berhasil Diupload']);
        }else{
            return redirect()->route('supplier.index')->with(['error' => 'Data Gagal Diupload']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Supplier::findOrFail($id);
        // dd($data);
        return view('pages.admin.suppliers.edit', [
            'data'  => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Supplier::findOrFail($id);

        $msg = $item->update($data);

        if ($msg) {
            return redirect()->route('supplier.index')->with(['success' => 'Data Berhasil Diupdate']);
        }else{
            return redirect()->route('supplier.index')->with(['error' => 'Data Gagal Diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Supplier::findOrFail($id);

        $msg = $data->delete();
        if ($msg) {
            return redirect()->back()->with(['success' => 'Data Berhasil Dihapus']);
        }else{
            return redirect()->back()->with(['error' => 'Data Gagal Dihapus']);
        }
    }
}
