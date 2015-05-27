@extends('admin.layouts.app')

@section('content')

<article>
	<h2>{{ $activity->title }}</h2>
	<p>
	{{ $activity->body }}
	</p>
</article>

@stop