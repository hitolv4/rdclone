@extends('layouts.app')

@section('content')

	
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('store_post_path') }}" method="post">
				
				{{ csrf_field()}}
				@if(count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $errors)
							<li>{{ $errors }}</li>
							@endforeach
						</ul>
					</div>

				@endif

				<div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" name="titulo" value="{{old('titulo')}}"/>			
				</div>

				<div class="form group">
					<label for="descripcion">Descripcion</label>
					<textarea class="form-control" name="descripcion" id="" cols="30" rows="10" >{{old('descripcion')}}</textarea>
				</div>

				<div class="form-group">
					<label for="url">Url</label>
					<input type="text" class="form-control" name="url" value="{{old('url')}}"/>
				</div>
			
				<button type="submit" class="btn btn-primary">Crear Post</button>

			</form>
			
			
		

		</div>
	</div>



@endsection