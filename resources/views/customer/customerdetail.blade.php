@extends('layouts.app2')
@section('content2')
<div class="container">
    <div class="main-content">
		<div class="row small-spacing">

			<!-- /.col-md-3 col-xs-12 -->
			<div class="col-md-9 col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-user ico"></i>Customer Detail</h4>
							<!-- /.box-title -->
							<div class="dropdown js__drop_down">
								<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
								<ul class="sub-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else there</a></li>
									<li class="split"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
								<!-- /.sub-menu -->
							</div>
							<!-- /.dropdown js__dropdown -->
							<div class="card-content">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label> Name:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">{{$customer->name}}</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Email</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">{{$customer->email}}</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Password</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">{{$customer->password}}</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>

                                </div>

                                <div class="col-md-12">
                                    <div class="col-xs-5">
                                    <a href="/customers/customerupdate/{{$customer->id}}" class="btn btn-warning btn-block">Update</a>
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="/customers/customerdelete/{{$customer->id}}" class="btn btn-danger btn-block">Delete</a>
                                        </div>
                                </div>
								<!-- /.row -->
							</div>
							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div>
					<!-- /.col-md-12 -->

					<!-- /.col-md-6 -->
					<
					<!-- /.col-md-6 -->
				</div>

			</div>
			<!-- /.col-md-9 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

	</div>

{{-- <h1>Customer Detail</h1>
<p>Name: {{$customer->name}}</p>
<p>Email: {{$customer->email}}</p>
<p>Password: {{$customer->password}}</p>
<a href="/customers/customerupdate/{{$customer->id}}"><button>Update</button></a>
<a href="/customers/customerdelete/{{$customer->id}}"><button>Delete</button></a> --}}


@endsection
</div>
