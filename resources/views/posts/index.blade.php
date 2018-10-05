@extends('layouts.main')

@section('main')
<upload-image-component></upload-image-component>
<div>
	<div class="d-flex justify-content-end pb-2 bt-2">
		<a href="{{route('posts.create')}}" class="btn btn-primary">
			New Post
		</a>
	</div>
	<div class="table table-responsive">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">title</th>
					<th scope="col">category</th>
					<th scope="col">actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
				<tr>
					<th scope="row">{{$post->id}}</th>
					<td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
					<td>{{$post->category !==null ? $post->category->title : null}}</td>
					<td>
						@include('partials.actions', [
							'edit' => route('posts.edit', $post->id),
							'delete' => route('posts.delete', $post->id),
							])
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endsection