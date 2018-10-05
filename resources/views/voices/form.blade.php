<ul class="nav nav-pills mb-4 maintabs">
		@foreach($langs as $key => $value)
		<li class="nav-item">
			<a class="nav-link  {{$key == 1 ? 'active' : ''}} show" data-lang="{{$key}}" data-toggle="pill" href="#tab-{{$value}}">{{$value}}</a>
		</li>
		@endforeach
</ul>
<div class="tab-content">
		@foreach($langs as $key => $value)
		<div class="tab-pane fade {{$key == 1 ? 'active show ' : ''}} " id="tab-{{$value}}">
			@include('partials.field', [
				'type' => 'text',
				'name' => 'title',
				'value' => isset($post) ?  $post->title : '',
				'placeholder' => 'title'
			])
			@include('partials.field', [
				'type' => 'textarea',
				'name' => 'body',
				'value' => isset($post) ?  $post->body : '',
				'rows' => '15',
				'placeholder' => 'body'
			])
			@include('partials.field', [
				'type' => 'textarea',
				'name' => 'message',
				'value' => isset($post) ?  $post->message : '',
				'rows' => '7',
				'placeholder' => 'message'
			])
		</div>
		@endforeach
</div>
<div>
	<button type="submit" class="btn btn-primary">update</button>
</div>
