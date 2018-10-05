@extends('layouts.main')

@section('main')

<div>
	<div class="d-flex justify-content-end pb-2 bt-2">
		<a href="{{route('voice.create')}}" class="btn btn-primary">
			New Post
		</a>
	</div>
	<div class="table table-responsive">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">title</th>
                    <th class="text-center" scope="col">edit</th>
                    <th class="text-center" scope="col">delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($voices as $post)
				<tr>
					<th scope="row">{{$post->id}}</th>
					<td><a href="{{route('voice.edit', $post->id)}}">{{$post->title}}</a></td>
					<td class="text-center">
						@include('partials.actions', [
                            'edit' => route('voice.edit', $post->id),
							])
                    </td>
                    <td class="text-center">
                            @include('partials.actions', [
                                'delete' => route('voice.delete', $post->id),
                                ])
                        </td>
				</tr>
				@endforeach
			</tbody>
		</table>
    </div>
</div>
@endsection