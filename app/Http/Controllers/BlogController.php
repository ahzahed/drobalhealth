<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2 || Auth::user()->user_type == 0) {
            if (Auth::user()->user_type == 1) {
                $blog = Blog::all();
                return view('backend.blog.blog', compact('blog'));
            } else {
                $id = Auth::user()->id;
                $blog = Blog::where('user_id', $id)->get();
                return view('backend.blog.blog', compact('blog'));
            }
        }
        return Redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            return view('backend.blog.blog_add');
        }
        return Redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $validatedData = $request->validate([
                'image' => 'image|mimes:png,jpg,jpeg,bmp,svg|max:5000',
                'title' => ['required'],
                'description' => ['required'],
            ]);

            $blog = new Blog;
            $imageUpload = request()->file('image');
            $imageName = time() . '.' . $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('/backend/images/blog');
            $imageUpload->move($imagePath, $imageName);

            // 'avatar' => 'public/Frontend/images/male/'.$avatarName,
            $blog->user_id = Auth::user()->id;
            $blog->image = 'public/backend/images/blog/' . $imageName;
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->save();
            $id = Auth::user()->id;
            $blog = Blog::where('user_id', $id)->get();
            return view('backend.blog.blog', compact('blog'));
            // return Redirect()->back();
        }
        return Redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $blog = Blog::findorfail($id);
            return view('backend.blog.blog_show', compact('blog'));
        }
        return Redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $blog = Blog::findorfail($id);
            return view('backend.blog.blog_edit', compact('blog'));
        }
        return Redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            if (request()->has('image')) {
                $blog = Blog::findorfail($id);
                $imageUpload = request()->file('image');
                $imageName = time() . '.' . $imageUpload->getClientOriginalExtension();
                $imagePath = public_path('/backend/images/blog');
                $imageUpload->move($imagePath, $imageName);
                $image = $blog->image;
                $path = str_replace("\\", "/", public_path());
                unlink($path . $image);

                // 'avatar' => 'public/Frontend/images/male/'.$avatarName,
                $blog->image = 'public/backend/images/blog/' . $imageName;
                $blog->title = $request->title;
                $blog->description = $request->description;
                $blog->save();
                $id = Auth::user()->id;
                $blog = Blog::where('user_id', $id)->get();
                return view('backend.blog.blog', compact('blog'));
            }
            $blog = Blog::findorfail($id);
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->save();
            $id = Auth::user()->id;
            $blog = Blog::where('user_id', $id)->get();
            return view('backend.blog.blog', compact('blog'));
        }
        return Redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $blog = Blog::find($id);
            $image = $blog->image;
            $path = str_replace("\\", "/", public_path());
            unlink($path . $image);
            $blog->delete();
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }

    public function addBlog()
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            return view('backend.blog.blog_add');
        }
        return Redirect()->route('home');
    }
    public function allBlog()
    {
        $blog = Blog::all();
        return view('frontend.pages.blog', compact('blog'));
    }

    function active($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $changeValue = Blog::where('id', $id)->update(['status' => 1]);
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }
    function deactive($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $changeValue = Blog::where('id', $id)->update(['status' => 0]);
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }
    function blogDelete($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            Blog::find($id)->delete();
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }
    function trash_blog()
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $trash = Blog::onlyTrashed()->get();
            return view('backend.blog.trash_blog', compact('trash'));
        }
        return Redirect()->route('home');
    }
    function blogForceDelete($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            $blog = Blog::onlyTrashed()->find($id);
            $image = $blog->image;
            $path = str_replace("\\", "/", public_path());
            unlink($path . $image);
            Blog::onlyTrashed()->find($id)->forceDelete();
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }
    function blogRestore($id)
    {
        if (Auth::user()->user_type == 1 || Auth::user()->user_type == 2) {
            Blog::onlyTrashed()->find($id)->restore();
            return Redirect()->back();
        }
        return Redirect()->route('home');
    }

    function blog_details($id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::where('id', '=', $id)->first();

        $value = $blog['priority'] + 1;
        Blog::where('id', $id)->update(['priority' => $value]);

        // $limitedBlogs = Blog::where('id', '!=', $id)->limit(8)->get();
        $limitedBlogs = Blog::where('id', '!=', $id)->orderByDesc('priority')->limit(8)->get();
        return view('frontend/blog_details', compact('blog', 'limitedBlogs'));
    }

    function front_all_blogs()
    {
        $blogs = Blog::paginate(15);
        $limitedBlogs = Blog::orderByDesc('priority')->limit(8)->get();
        return view('frontend/allblogs', compact('blogs', 'limitedBlogs'));
    }

    function posted_by($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::where('id', '=', $id)->first();
        $blogs = Blog::where('user_id', '=', $id)->get();
        return view('frontend/posted_by_details', compact('user', 'blogs'));
    }
}
