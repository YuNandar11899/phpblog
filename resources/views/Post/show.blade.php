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
							<h4 class="box-title"><i class="fa fa-user ico"></i>Post Detail</h4>
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
											<div class="col-xs-5"><label> Title:</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">{{$post->title}}</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Content</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">{{$post->content}}</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Author</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7">{{$post->customer->name}}</div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
                                    </div>

                                    <div class="col-md-6">
										<div class="row">
											<div class="col-xs-5"><label>Image</label></div>
											<!-- /.col-xs-5 -->
											<div class="col-xs-7"><img src="/storage/{{$post->image}}" width="50px" height="50px"></div>
											<!-- /.col-xs-7 -->
										</div>
										<!-- /.row -->
									</div>

                                </div>

                                <div class="col-md-12">
                                    <div class="col-xs-5">
                                        <a href="/posts/{{$post->id}}/edit"><button class="btn btn-warning btn-block">Update</button></a>
                                    </div>
                                    <div class="col-xs-5">
                                        <button type="submit" form="delete-task" class="btn btn-danger btn-block">Delete</button>
                                            <form action="/posts/{{$post->id}}" method="POST" id="delete-task">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
					
					<!-- /.col-md-6 -->
				</div>

			</div>
			<!-- /.col-md-9 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

	</div>

{{-- <h1>Post Detail</h1>
<p>Title: {{$post->title}}</p>
<p>Content: {{$post->content}}</p>
<p>Author: {{$post->customer->name}}</p>
<p>Image:<img src="/storage/{{$post->image}}" width="50px" height="50px"></P>
<a href="/posts/{{$post->id}}/edit"><button>Update</button></a>
<button type="submit" form="delete-task">Delete</button>
<form action="/posts/{{$post->id}}" method="POST" id="delete-task">
    @csrf
    @method('DELETE')
</form> --}}
</div>
@endsection
