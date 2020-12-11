@extends('layouts.app2')
@section('content2')
<div class="container">

    <div class="main-content">
        <div class="row small-spacing">

           <div class="col-lg-6 col-xs-12">
               <div class="box-content card white">
                   <h4 class="box-title">Customer Update</h4>
                   <!-- /.box-title -->
                   <div class="card-content">
                       <form action="/customers/customerupdate" method="POST">
                           @csrf
                           <input type="hidden" name="id" value="{{$customer->id}}">
                           <div class="form-group">
                               <label for="name">Name</label>
                               <input type="text" name="name" class="form-control" id="name" value="{{$customer->name}}">
                           </div>
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="text" name="email" class="form-control" id="email" value="{{$customer->email}}">
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" name="password" class="form-control" id="password" value="{{$customer->password}}">
                           </div>
                           <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update</button>
                       </form>
                   </div>
                   <!-- /.card-content -->
               </div>
               <!-- /.box-content -->
           </div>
    </div>

    {{-- <h1>Customer Update</h1>
    <form action="/customers/customerupdate" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$customer->id}}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$customer->name}}"><p><p>
        <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{$customer->email}}"><p><p>
            <label for="password">Password</label>
                <input type="password" name="password" id="password" value="{{$customer->password}}"><p></p>
                <input type="submit" value="Update">
     </form> --}}

</div>
@endsection

