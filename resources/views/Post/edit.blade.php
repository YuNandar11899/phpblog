
    <style>
        .error{
            color:red;
        }
        </style>
@extends('layouts.app2')
@section('content2')
<div class="container">


    <div class="main-content">
        <div class="row small-spacing">

           <div class="col-lg-6 col-xs-12">
               <div class="box-content card white">
                   <h4 class="box-title">Post Update</h4>
                   <!-- /.box-title -->
                   <div class="card-content">
                       <form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PATCH')
                           @include('post.form')
                           <input type="submit" value="Update" class="btn btn-warning">
                       </form>
                   </div>
                   <!-- /.card-content -->
               </div>
               <!-- /.box-content -->
           </div>
    </div>
    {{-- <h1>Post Update</h1>
    <form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('post.form')
        <input type="submit" value="Update">
    </form> --}}

</div>
@endsection
