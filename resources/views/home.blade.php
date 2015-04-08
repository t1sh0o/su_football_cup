@extends('app')

@section('content')
<div class="panel panel-info">

	<div class="panel-heading">Blog</div>

	<div class="panel-body">
		@forelse ($posts as $post)
			<div class="post clearfix">
				<div class="col-md-4">
					<h3>{{ $post['title'] }}</h3>
					<small>{{ $post['created_at'] }}</small>
				</div>	
				<div class="col-md-8">
					<article class="post-body"> {{ $post['body'] }}</article>postspos
				</div>
			</div>
			<hr>
		@empty
			There are no blog posts yet.
			Please come back later.
		@endforelse
	</div>
</div>
@endsection
