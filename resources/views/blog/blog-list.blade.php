@extends('upload.global-layout')

@section('body')
  <div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  </div>
   
   <div align="center">{!! $images->render() !!}</div>
@stop
