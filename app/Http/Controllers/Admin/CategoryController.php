<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\BlogCategory;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:category-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    // }

    public function index(Request $request)
    {
        if (request()->ajax()) {
            $query = Category::all();
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
                                    <a class="dropdown-item" href="' . route('category.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('category.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->addColumn('image', function ($item){
                    return '<img src="'. Storage::url($item->image_category) . '" class="img-fluid">';
                })
                ->rawColumns(['action','image'])
                ->addIndexColumn()
                ->make();
        }
        return view('pages.admin.category_product.index');
    }

    public function create()
    {
        return view('pages.admin.category_product.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'image_category'    => 'required|image|file|max:1024|mimes:png,jpg,jpeg,svg',
        'name_category'     => 'required'
    ]);

    if  ($request->file('image_category')) {
        $validatedData['image_category'] = $request->file('image_category')->store('assets/category', 'public');
        $validatedData['slug'] = $request->name_category;
    }
    
    Category::create($validatedData);

    if($validatedData){
        //redirect dengan pesan sukses
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('category.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

    public function edit(Category $category)
    {
        return view('pages.admin.category_product.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $rules = [
            'image_category' => 'image|file|max:1024|mimes:png,jpg,jpeg,svg',
            'name_category'  => 'required',
        ];
        
        $validatedData = $request->validate($rules);
        $validatedData['slug'] = $request->name_category;

        if (!empty($request->image_category)) {
            Storage::disk('local')->delete('public/'. $request->oldImage);
            $validatedData['image_category'] = $request->file('image_category')->store('assets/category', 'public');
            $categorySave = Category::where('id', $category->id)->update($validatedData);
        }else{
            // $validatedData['slug'] = $request->name_category;
            $categorySave = Category::where('id', $category->id)->update($validatedData);
        }

        if($categorySave){
            //redirect dengan pesan sukses
            return redirect()->route('category.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('category.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $data = Category::findOrFail($id);

        $image = $data->image_category;

        if($image) {
            Storage::disk('local')->delete('public/'. $image);
        }
        $delete = $data->delete();

        if ($delete) {
            return redirect()->route('category.index')->with(['success' => 'Category has been deleted!']);
        }else{
            return redirect()->route('category.index')->with(['error' => 'Category has not deleted!']);
        }
    }

}
