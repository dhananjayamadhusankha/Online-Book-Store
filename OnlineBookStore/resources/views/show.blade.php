@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Book Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('books.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Book Title</b></label>
			<div class="col-sm-10">
				{{ $book->book_title }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Book Author</b></label>
			<div class="col-sm-10">
				{{ $book->book_author }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Book Cost</b></label>
			<div class="col-sm-10">
				{{ $book->book_cost }}
			</div>
		</div>
	</div>
</div>

@endsection('content')