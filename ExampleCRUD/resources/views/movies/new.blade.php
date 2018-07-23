@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				{!! Form::open(['route' => 'movie.store','method' => 'post', 'novalidate']) !!}
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Decripción</label>
						<input type="text" name="description" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
				{!! Form::close() !!}
			</article>
		</div>
	</section>
@endsection	