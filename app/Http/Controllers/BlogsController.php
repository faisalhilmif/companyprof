<?php

namespace App\Http\Controllers;
use App\Blog;
use Validator;
use Session;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /* 1. This method relates to the "images list" view */
      public function index()
      {
         $blogs = Blog::paginate(10);
         return view('blog.index')->with('blogs', $blogs);
      }
    
    /* 2. This method relates to the "add new image" view */
      public function create()
      {
         return view('blog.add-new-blog');
      }
        
    
    /* 3. This method relates to the "image detail" view */
      public function show($id)
      {
         $image = Blog::find($id);
         return view('blog.image-detail')->with('image', $image);
      }
    
    public function edits($id)
      {
         $image = Blog::find($id);
         return view('blog.edit-blog')->with('image', $image);
      }
/* 4. This method relates to the "edit image" view */
      public function edit($id)
      {
         $blog = Blog::find($id);
         return view('blog.edit-blog')->with('blog', $blog);
      }
    
    public function store(Request $request)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
         'title'     => 'required|regex:/^[A-Za-z ]+$/',
         'description' => 'required',
         'author' => 'required',
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      Blog::create($request->all());
      Session::flash("notice", "Article success created");

        return redirect()->route("blog.index");
   }
    
    public function update(Request $request, $id)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
            //'title'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $blog = Blog::find($id);

      // replace old data with new data from the submitted form //
      $blog->title = $request->input('title');
      $blog->description = $request->input('description');
      $blog->author = $request->input('author');
      $blog->tag = $request->input('tag');
      $blog->save();

      return redirect('/blog')->with('message','You just updated an blog!');
   }
    
    public function destroy($id)
   {
      $image = Blog::find($id);
      $image->delete();
      return redirect('/blog')->with('message','You just deleted an article!');
   }
}
