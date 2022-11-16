@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Book</div>
	<div class="card-body">
		<form method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Book Title</label>
				<div class="col-sm-10">
					<input type="text" name="book_title" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Book Author</label>
				<div class="col-sm-10">
					<input type="text" name="book_author" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Book Cost</label>
				<div class="col-sm-10">
					<input type="text" name="book_cost" class="form-control" />
				</div>
			</div>
			
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')