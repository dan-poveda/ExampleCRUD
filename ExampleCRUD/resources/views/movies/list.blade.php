@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				{!! Form::open(['route' => 'movie/show', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="form-control" name="name">
				</div>
				<div class="form-control">
					<button type="submit" class="btn btn-default">Search</button>
					<a href="{{ route('movie.index') }}" class="btn btn-primary">All</a>
					<a href="{{ route('movie.create') }}" class="btn btn-primary">Create</a>
				</div>
				{!! Form::close() !!}
			</article>
			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bodered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($movies as $movie)
							<tr>
								<td>{{ $movie->name }}</td>
								<td>{{ $movie->description }}</td>
								<td>
									<a class="btn btn-primary btn-xs" href="{{ route('movie.edit',['id' => $movie->id]) }}">Edit</a>
									<a class="btn btn-danger btn-xs" href="{{ route('movie/destroy',['id' => $movie->id]) }}">Delete</a>
								</td>
							</tr>
						@endforeach	
					</tbody>
				</table>	
			</article>
		</div>
	</section>
@endsection	