@extends('dashboard')

@section('content')
   @include('upload.error-notification')
   {!! Form::model($blog,['url' => '/blog/'.$blog->id, 'method' => 'PUT', 'files'=>true]) !!}

      <div class="form-group">
         <label for="caption">Title</label>
         {!! Form::text('title',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="description">Description</label>
         {!! Form::textarea('description',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="caption">Author</label>
         {!! Form::text('author',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="caption">Tag</label>
         {!! Form::text('tag',null,['class'=>'form-control']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/blog') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop
