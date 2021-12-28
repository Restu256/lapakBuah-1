<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GudangController extends Controller
{
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
        return view('pages.admin.gudang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.gudang.create');
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

        $msg = Gudang::create($data);

        if ($msg) {
            return redirect()->route('gudang.index')->with(['success' => 'Data Berhasil Diupload']);
        }else{
            return redirect()->route('gudang.index')->with(['error' => 'Data Gagal Diupload']);
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
        $data = Gudang::findOrFail($id);
        // dd($data);
        return view('pages.admin.gudang.edit', [
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

        $item = Gudang::findOrFail($id);

        $msg = $item->update($data);

        if ($msg) {
            return redirect()->route('gudang.index')->with(['success' => 'Data Berhasil Diupdate']);
        }else{
            return redirect()->route('gudang.index')->with(['error' => 'Data Gagal Diupdate']);
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
        $data = Gudang::findOrFail($id);

        $msg = $data->delete();
        if ($msg) {
            return redirect()->back()->with(['success' => 'Data Berhasil Dihapus']);
        }else{
            return redirect()->back()->with(['error' => 'Data Gagal Dihapus']);
        }
    }
}
