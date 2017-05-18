@extends('dashboard')

@section('content')
   @include('upload.error-notification')
   <div class="col-md-12">
   {!! Form::open(['route' => 'blog.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
      <div class="form-group">
         <label for="title">Title</label>
         <input type="text" class="form-control" name="title" value="">
      </div>

      <div class="form-group">
         <label for="description">Description</label>
         <textarea class="form-control" name="description"></textarea>
      </div>

      <div class="form-group">
         <label for="author">Author</label>
         <input type="text" class="form-control" name="author">
      </div>

      <div class="form-group">
         <label for="tag">Tag</label>
         <input type="text" class="form-control" name="tag">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
   </div>
   @endsection
