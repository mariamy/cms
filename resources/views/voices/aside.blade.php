<div>
	<div class="form-group">
		<h3 for="">choose Image</h3>
		{{-- <avatar-component :user='{{auth()->user()}}'></avatar-component> --}}
		<post-image-component v-bind:postimage='"/images/posts/{{ isset($post) ? $post->image : '' }}"'></post-image-component>
	</div>
</div>