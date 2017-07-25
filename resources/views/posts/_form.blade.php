
	@if($post->exists)

			<form action="{{ route('update_post_path',['post'=>$post->id]) }}" method="post">
				
			{{method_field('PUT')}}
			
	@else
			
			<form action="{{ route('store_post_path') }}" method="POST">


	@endif

				{{ csrf_field()}}





				<div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" name="titulo" value="{{ $post->titulo or old('titulo')}}"/>			
				</div>

				<div class="form group">
					<label for="descripcion">Descripcion</label>
					<textarea class="form-control" name="descripcion" id="" cols="30" rows="10" >{{$post->descripcion or old('descripcion') }}</textarea>
				</div>

				<div class="form-group">
					<label for="url">Url</label>
					<input type="text" class="form-control" name="url" value="{{$post->url or old('url') }} "/>
				</div>
			
				<button type="submit" class="btn btn-primary">Guardar</button>

			</form>