<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Models\Admin\Transaction;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:transaction-list|transaction-create|transaction-edit|transaction-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:transaction-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:transaction-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:transaction-delete', ['only' => ['destroy']]);
    // }
    public function index(Request $request)
    {
        // $data = Transaction::orderBy('id','DESC')->paginate(5);
        // return view('pages.admin.Transaction.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
        $data = Transaction::all();
		// return view('pages.admin.product.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

         if (request()->ajax()) {
            $query = Transaction::all();
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
        return view('pages.admin.transaction.index');
        
    }
    public function create()
    {
        return view('pages.admin.transaction.create');
    }
}
