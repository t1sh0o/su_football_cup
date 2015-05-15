@extends('app')

@section('content')
<div class="panel panel-info">

	<div class="panel-heading">Blog</div>
	<div class="panel-body">
		@forelse ($posts as $post)
			<div class="post clearfix">
				<div class="col-md-4">
					{!! link_to_route('posts.show', $post['title'], $post['slug'], ['class' => 'h3']) !!}
					<div>
					<small>{{ $post['created_at']->diffForHumans() }}</small>
					</div>
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
