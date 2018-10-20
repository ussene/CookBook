@extends('layouts.app')
@section('title', 'Blog')
@section('content')

	<div class="container col-md-8 col-md-offset-2 mt-5">
		@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>	
		@endif

		@if($posts->isEmpty())
			<p>There is no post.</p>
		@else
			@foreach($posts as $post)
				<div class="card my-3">
					<div class="card-header border-warning"><h3>{{ $post->title }}</h3></div>
					<div class="card-body">
						{{ nl2br(mb_substr($post->content, 0, 500)) }}...
					</div>
				</div>
			@endforeach
		@endif

		{{ $posts->links() }}
	</div>

@endsection
