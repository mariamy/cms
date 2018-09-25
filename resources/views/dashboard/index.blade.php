@extends('layouts.main')

@section('main')
<div>
	{{Auth::user()}}
</div>
@endsection