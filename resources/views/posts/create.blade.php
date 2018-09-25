@extends('layouts.main')

@section('main')
<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-9">
			<h2>update Post</h2>

			@include('posts.form')
		</div>
		<aside class="col-md-3">
			@include('posts.aside')
		</aside>
	</div>
</form>
@endsection