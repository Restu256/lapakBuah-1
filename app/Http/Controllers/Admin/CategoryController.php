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
        $data = Category::orderBy('id','DESC')->paginate(5);
        return view('pages.admin.category_product.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

        // if (request()->ajax()) {
        //     $query = Category::all();
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
        // return view('pages.admin.category_product.index');
    }

    public function create()
    {
        return view('pages.admin.category_product.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'image_category'    => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
        'name_category'     => 'required'
        
    ]);
    if  ($request->file('image_category')) {
        $validatedData['image_category'] = $request->file('image_category')->store('category');
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
    // dd($category);
}

public function update(Request $request, Category $category)
{
    $rules = [
        'image_category' => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
        'name_category'  => 'required',
        'slug'           => 'required'
    ];

    
    $validatedData = $request->validate($rules);

    if  ($request->file('image_category')) {
        if ($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['image_category'] = $request->file('image_category')->store('category');
    }
    //get data Category by ID
    Category::where('id', $category->id)->update($validatedData);


    if($category){
        //redirect dengan pesan sukses
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('category.index')->with(['error' => 'Data Gagal Diupdate!']);
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
