<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Validator;

class ImageController extends Controller
{
    /* 1. This method relates to the "images list" view */
      public function index()
      {
         $images = Portfolio::paginate(10);
         return view('upload.index')->with('images', $images);
      }
	
	/* 2. This method relates to the "add new image" view */
      public function create()
      {
         return view('upload.add-new-image');
      }
		
	
	/* 3. This method relates to the "image detail" view */
      public function show($id)
      {
         $image = Portfolio::find($id);
         return view('upload.image-detail')->with('image', $image);
      }
	
	public function edits($id)
      {
         $image = Portfolio::find($id);
         return view('upload.edit-image')->with('image', $image);
      }
/* 4. This method relates to the "edit image" view */
      public function edit($id)
      {
         $image = Portfolio::find($id);
         return view('upload.edit-image')->with('image', $image);
      }
	
	public function store(Request $request)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
         'title'     => 'required|regex:/^[A-Za-z ]+$/',
         'description' => 'required',
         'userfile'     => 'required|image|mimes:jpeg,png|min:1|max:250'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      $image = new Portfolio;

      // upload the image //
      $file = $request->file('userfile');
      $destination_path = 'uploads/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
      
      // save image data into database //
      $image->image = $destination_path . $filename;
      $image->title = $request->input('title');
      $image->description = $request->input('description');
      $image->save();

      return redirect('/image')->with('message','You just uploaded an image!');
   }
	
	public function update(Request $request, $id)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
            'title'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'userfile'    => 'sometimes|image|mimes:jpeg,png|min:1|max:250'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $image = Portfolio::find($id);

      // if user choose a file, replace the old one //
      if( $request->hasFile('userfile') ){
           $file = $request->file('userfile');
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $image->file = $destination_path . $filename;
      }
        
      // replace old data with new data from the submitted form //
      $image->title = $request->input('title');
      $image->description = $request->input('description');
      $image->save();

      return redirect('/image')->with('message','You just updated an image!');
   }
	
	public function destroy($id)
   {
      $image = Portfolio::find($id);
      $image->delete();
      return redirect('/image')->with('message','You just deleted an image!');
   }
}
