@extends('upload.global-layout')

@section('body')
   <div class="row">
      @if(count($images) > 0)
         <div class="col-md-12 text-center" >
            <a href="{{ url('/image/create') }}" class="btn btn-primary" role="button">
               Add New Image
            </a>
            <hr />
            @include('upload.error-notification')
         </div>
      @endif
      @forelse($images as $image)
	   
       <div id="fh5co-board" data-columns>  
	   <div class="item">
           <div class="animate-box">
               <a href="{{asset($image->image)}}" class="image-popup fh5co-board-img" title="{!! substr($image->description, 0,100) !!}"><img src="{{asset($image->image)}}" /></a>
               <div class="caption">
                  <h3>{{$image->title}}</h3>
                  <p>{!! substr($image->description, 0,100) !!}</p>
                  <p>
                     <div class="row text-center" style="padding-left:1em;">
						 <span class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                     <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                     <span class="pull-left">&nbsp;</span>
                     {!! Form::open(['url'=>'/image/'.$image->id, 'class'=>'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
                     </div>
				   </p>
               </div>
            </div>
         </div>
</div>



      @empty
         <p>No images yet, <a href="{{ url('/image/create') }}">add a new one</a>?</p>
      @endforelse
   
   <div align="center">{!! $images->render() !!}</div>
@stop
