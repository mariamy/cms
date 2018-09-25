<div class="row justify-content-end">

</div>
<div class="form-group">
	<input type="text" class="form-control" name="title" value="{{ isset($post) ?  $post->title : '' }}">
</div>
<div class="form-group">
	<textarea class="form-control" name="body" rows="15">{{ isset($post) ? $post->body : '' }}</textarea>
</div>
<div>
	<button type="submit" class="btn btn-primary">submit</button>
</div>
