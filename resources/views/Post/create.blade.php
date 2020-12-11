
    <style>
        .error{
            color:red;
        }
        </style>
@extends('layouts.app2')
@section('content2')
<div class="main-content">
 <div class="row small-spacing">

    <div class="col-lg-6 col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title">Post Add</h4>
            <!-- /.box-title -->
            <div class="card-content">

    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        @include('post.form')
        <input type="submit" value="Add" class="btn btn-warning">
    </form>
</div>
<!-- /.card-content -->
</div>
<!-- /.box-content -->
</div>
</div>
@endsection



