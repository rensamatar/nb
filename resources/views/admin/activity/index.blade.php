@extends('admin.layouts.app')

@section('content')

@foreach ($activities as $activity)
<article>
	<h2>
		<a href="{{ url('/activities', $activity->id) }}">
			{{ $activity->title }}
		</a>
	</h2>
	<p>{{ $activity->body }}</p>
</article>
@endforeach

@stop