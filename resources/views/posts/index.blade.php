@extends('layouts.app')

@section('content')

	@foreach($posts as $post)

		<div class="row">
			<div class="col-md-12">
				<h2><a href="{{route('post_path',['post'=>$post->id])}}">{{$post->titulo}}</a></h2>
				<p>Publicado {{$post->created_at->diffForHumans()}}</p>
			</div>
		</div>

		<hr>

	@endforeach	
		


@endsection




	
</body>
</html>