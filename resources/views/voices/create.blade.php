@extends('layouts.main')

@section('main')
<form action="{{route('voice.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-9">
			<h2>Create Post</h2>

			@include('voices.form')
		</div>
		<aside class="col-md-3">
			@include('voices.aside')
		</aside>
	</div>
</form>
@endsection