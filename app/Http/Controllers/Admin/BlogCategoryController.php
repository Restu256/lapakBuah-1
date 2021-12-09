<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogCategoryRequest;
use App\Models\Admin\BlogCategory;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class BlogCategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','store']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = BlogCategory::orderBy('id','DESC')->paginate(5);
        return view('pages.admin.category_blog.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pages.admin.category_blog.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'image'    => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
        'category'     => 'required'
        
    ]);
    if  ($request->file('image')) {
        $validatedData['image'] = $request->file('image')->store('blogcategory');
        $validatedData['slug'] = $request->category;

    }
    
    BlogCategory::create($validatedData);
    if($validatedData){
        //redirect dengan pesan sukses
        return redirect()->route('category_blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('category_blog.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function edit(BlogCategory $category_blog)
{
    return view('pages.admin.category_blog.edit', compact('category_blog'));
    // dd($category_blog);
}

public function update(Request $request, BlogCategory $category_blog)
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
    BlogCategory::where('id', $category_blog->id)->update($validatedData);


    if($category_blog){
        //redirect dengan pesan sukses
        return redirect()->route('category_blog.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('category_blog.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy(BlogCategory $category_blog)
{
    if($category_blog->category) {
        Storage::delete($request->category);
    }
    BlogCategory::destroy($category_blog->id);
    return redirect()->route('category_blog.index')->with(['success' => 'Category has been deleted!']);
}

}
