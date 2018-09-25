@extends('layouts.main')

@section('main')
<div>
	<h3 class="pb-3">Personal Information</h3>
	<div class="d-flex">
		<div class="col-md-4 card">
			<div class="card-body">
			<h4>Change profile image</h4>
			<avatar-component :user="{{Auth::user()}}"></avatar-component>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
				<div class="pb-3"><h4>Name: {{Auth::user()->name}}</h4></div>
				<div class="pb-3"><h4>Email: {{Auth::user()->email}}</h4></div>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection