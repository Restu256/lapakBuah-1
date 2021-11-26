<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImageBlogRequest;
use App\Models\Admin\ImageBlog;
use App\Models\Admin\Blog;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ImageBlogController extends Controller
{
    public function index(Request $request)
    {
        $data = ImageBlog::all();
		return view('pages.admin.image_blog.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

        // $data = ImageBlog::orderBy('id','DESC')->paginate(5);
        // return view('pages.admin.image_product.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);

        // if (request()->ajax()) {
        //     $query = ImageBlog::all();
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
        $blog = Blog::get();
        return view('pages.admin.image_blog.create', ['blog' => $blog]);
        // return view('pages.admin.image_blog.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'blog_id'     => 'required',
        'image'       => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
        
    ]);

    if  ($request->file('image')) {
        $validatedData['image'] = $request->file('image')->store('imageblog');
    }
    
    ImageBlog::create($validatedData);
    if($validatedData){
        //redirect dengan pesan sukses
        return redirect()->route('imageblog.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('imageblog.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function edit(ImageBlog $imageblog)
{
    return view('pages.admin.image_blog.edit', compact('imageblog'));
}

public function update(Request $request, ImageBlog $imageblog)
{
    $rules = [
        'image' => 'required|image|file|max:1024|mimes:png,jpg,jpeg',
        'name'  => 'required',
        'slug'           => 'required'
    ];

    
    $validatedData = $request->validate($rules);

    if  ($request->file('image')) {
        if ($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('product');
    }
    //get data Image Product by ID
    ImageBlog::where('id', $imageblog->id)->update($validatedData);


    if($imageblog){
        //redirect dengan pesan sukses
        return redirect()->route('imageblog.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('imageblog.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy(ImageProduct $imageblog)
{
    if($imageblog->image) {
        Storage::delete($request->image);
    }
    ImageBlog::destroy($imageblog->id);
    return redirect()->route('imageblog.index')->with(['success' => 'Image Product has been deleted!']);
}
}
