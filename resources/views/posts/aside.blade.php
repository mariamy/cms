<div>

	<div class="form-group">
		<h3 for="">choose category</h3>
			@foreach($categories as $cat)
			<div>
			<input 
				type="radio" 
				id="{{$cat->title}}" 
				name="category_id" 
				value="{{$cat->id}}" 
				{{ isset($post) && $post->category_id === $cat->id ? 'checked' : null }} />
			<label for="{{$cat->title}}">{{$cat->title}}</label>
			</div>
			@endforeach
	</div>

	<div class="form-group">
		<h3 for="">choose Image</h3>
		{{-- <avatar-component :user='{{auth()->user()}}'></avatar-component> --}}
		<post-image-component v-bind:postImage='"/images/posts/{{ isset($post) ? $post->image : '' }}"'></post-image-component>
	</div>
</div>