
@extends('layouts.app2')
@section('content2')
<div class="main-content">
 <div class="row small-spacing">

    <div class="col-lg-6 col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title">Customer Add</h4>
            <!-- /.box-title -->
            <div class="card-content">
                <form action="/customers/customeradd" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- /.card-content -->
        </div>
        <!-- /.box-content -->
    </div>
</div>
    <!-- /.col-lg-6 col-xs-12 -->


{{-- <div class="container">
    <h1>Customer Add</h1>
    <form action="/customers/customeradd" method="POST">
        @csrf
    <label for="name">Name</label>
        <input type="text" name="name" id="name"><p><p>
        <label for="email">Email</label>
            <input type="text" name="email" id="email"><p><p>
            <label for="password">Password</label>
                <input type="password" name="password" id="password"><p></p>
                <input type="submit" value="Add">
            </form>
</div> --}}
@endsection


