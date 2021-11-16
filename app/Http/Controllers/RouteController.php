<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;

class RouteController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:route-list|route-create|route-edit|route-delete', ['only' => ['index','store']]);
         $this->middleware('permission:route-create', ['only' => ['create','store']]);
         $this->middleware('permission:route-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:route-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $routes = Permission::orderBy('id','DESC')->paginate(5);
        if (request()->ajax()) {
            $query = Permission::all();
            // dd($query);
            $pesan = 'apakah yakinmau menghapus!';
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="row text-center">
                    <a class="btn btn-primary m-1" href="' . route('routes.show', $item->id) . '">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>    
                    <a class="btn btn-primary m-1" href="' . route('routes.edit', $item->id) . '">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <form action="' . route('routes.destroy', $item->id) . '" method="POST">
                            ' . method_field('delete') . csrf_field() . '
                            <button type="submit" class="btn btn-danger m-1">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>    
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make();
        }
        return view('pages.role_management.route_role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.role_management.route_role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);
    
        $permissions = Permission::create(['name' => $request->input('name')]);
        // $role->syncPermissions($request->input('permission'));
        
        if ($permissions) {
            return redirect()->route('routes.index')->with('success','Role created successfully');
        }else{
            return redirect()->route('routes.index')->with('error','Role failed to create');

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
        $permission = Permission::findOrFail($id);
        return view('pages.role_management.route_role.show', [
            'permission' => $permission
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('pages.role_management.route_role.edit', [
            'permission' => $permission
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
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);

        $data = $request->all();

        $item = Permission::findOrFail($id);

        $msg = $item->update($data);

        if ($msg) {
            return redirect()->route('routes.index')->with('success','Role change successfully');
        }else{
            return redirect()->route('routes.index')->with('error','Role failed to change');
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
        $data = Permission::findOrFail($id);

        $msg = $data->delete();

        if ($msg) {
            return redirect()->route('routes.index')->with('success','Role delete successfully');
        }else{
            return redirect()->route('routes.index')->with('error','Role failed to delete');
        }
    }
}
