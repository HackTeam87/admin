@extends('admin.admin-index')



@section('breadcrumb')
	<ol class="breadcrumb">

		<li><a href="{{url('admin-panel/')}}">Home</a></li>
		<li><a href="{{url('admin-panel/create')}}">Posts</a></li>
		<li class="prime-text">HELLO</li>
		<li><a class="navbar-brand" href="http://localhost/admin-panel/">
				<img alt="Brand" src="http://localhost/uploads/logo/logo2.png" width="70px">
			</a></li>

	</ol>
@show
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">

						<div class="btn-group pull-right btn-group-xs">

							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
								<span class="sr-only">Edit</span>
							</button>

							
						</div>

						<div class="tab-content">
							<span class="tab-pane active edit_profile">
								Edit Profile
							</span>
							<span class="tab-pane edit_settings">
								Edit Account
							</span>
							<span class="tab-pane edit_account">
								Edit Account Admin
							</span>
						</div>

					</div>
					<div class="panel-body">


							<p>no Profile Yet</p>

					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
