@extends('app')

@section('content')
<div class="panel panel-info">

	<div class="panel-heading">{{ $post['title'] }}</div>
	<div class="panel-body">
		<article class="post-body"> {{ $post['body'] }}</article>
		@if ($post['tags'])
			<h5>Tags:</h5>
				@foreach ($post['tags'] as $tag)
					{!! link_to_route('tags.show', '#'. $tag['name'] . '| ', $tag['id']) !!}
				@endforeach
		@endif
	</div>
</div>
@endsection
