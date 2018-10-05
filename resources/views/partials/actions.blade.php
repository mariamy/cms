@if(isset($show))
<a class="icon" href="{{ $show or '' }}">
    <i class="fa fa-fw fa-eye"></i>
</a>
@endif
@if(isset($edit))
<a class="icon" href="{{ $edit or '' }}">
		@include('icons.edit')
</a>
@endif
@if(isset($delete))
		<span class="icon"> 
		   <a class="icon " href="{{ $delete or '' }}">
		       @include('icons.delete')
		   </a>
		</span>
@endif

@if(isset($save))
		<span class="icon"> 
		  <form  method="POST" action="{{ $save or '' }}">
		    @csrf
		    <button class="btn btn-secondary btn-sm" type="submit">
		       {{ $btn or '' }}
		    </button>                    
		  </form>
		</span>
@endif