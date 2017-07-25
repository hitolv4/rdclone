@extends('layouts.app')

@section('content')

	
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $errors)
						<li>{{ $errors }}</li>
						@endforeach
					</ul>
				</div>
				
			@endif


			<form action="{{ route('update_post_path',['post'=>$post->id]) }}" method="post">
				
				{{ csrf_field()}}

				{{method_field('PUT')}}



				<div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" name="titulo" value="{{$post->titulo}}"/>			
				</div>

				<div class="form group">
					<label for="descripcion">Descripcion</label>
					<textarea class="form-control" name="descripcion" id="" cols="30" rows="10" >{{$post->descripcion}}</textarea>
				</div>

				<div class="form-group">
					<label for="url">Url</label>
					<input type="text" class="form-control" name="url" value="{{$post->url}}"/>
				</div>
			
				<button type="submit" class="btn btn-primary">Editar Post</button>

			</form>


@endsection