@extends('layouts.main')

@section('main')

<form action="{{route('uploadmedia')}}" method="post" enctype='multipart/form-data'  class="upload-image">
	@csrf
	<div class="fileupload">
		Choose File
		<input type="file" name="mediaimage" multiple>
	</div>
	<input type="submit" class="btn btn-success" value="Upload">
</form>
<div class="row">
	@if(count($images) > 0)
		 @foreach($images as $image) 
			<div class="col-md-3">as
				<img src="storage/app/public/media/{{$image->image}}" alt="" />
			</div>
		 @endforeach 
	 @endif
</div>
@endsection