<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index','store']]);
         $this->middleware('permission:blog-create', ['only' => ['create','store']]);
         $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Blog::all();
		return view('pages.admin.blog.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

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
        $category = BlogCategory::get();
        return view('pages.admin.blog.create', ['category_blog' => $category]);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'judul_blog'           => 'required|max:255',
        'category_blog_id'     => 'required',
        'isi_blog'             => 'required',
        'tag_blog'             => 'required',
        
    ]);
    if  ($request) {
        $validatedData['slug'] = $request->judul_blog;
    }
    $validatedData['tanggal_pembuatan'] = date("Y-m-d");
    $validatedData['user_id'] = auth()->user()->id;
    
    Blog::create($validatedData);
    if($validatedData){
        //redirect dengan pesan sukses
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}
public function show($id)
{
$blog = Blog::where('id', $id)->first();
if ($blog) {
$data = array('title' => $blog->judul_blog,
'blog' => $blog);
return view('pages.admin.blog.show', $data);            
} else {
// kalo produk ga ada, jadinya tampil halaman tidak ditemukan (error 404)
return abort('404');
}  
}
public function edit(Blog $blog)
{
    return view('pages.admin.product.edit', compact('product'));
}

public function update(Request $request, Blog $blog)
{
    $rules = [
        'product_id'     => 'required',
        'image'          => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
        ];

    
    $validatedData = $request->validate($rules);

    if  ($request->file('image')) {
        if ($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('product');
    }
    //get data Category by ID
    Blog::where('id', $blog->id)->update($validatedData);


    if($blog){
        //redirect dengan pesan sukses
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('product.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy(Blog $blog)
{
    if($blog->image_category) {
        Storage::delete($request->image_category);
    }
    Blog::destroy($blog->id);
    return redirect()->route('category.index')->with(['success' => 'Category has been deleted!']);
}
}
