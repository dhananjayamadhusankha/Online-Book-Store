@extends('master')

@section('content')

@if(Session::has('fail'))	        
        
        <div class="alert alert-danger container">	        
        
            {{ Session::get('fail') }}	        
        
            @php	        
        
                Session::forget('fail');	        
        
            @endphp	        
        
        </div>	        
        
@endif

<div class="card">
	<div class="card-header">
	<div class="row">
			<div class="col col-md-6"><b>Edit Book Details</b></div>
				<div class="col col-md-6">
					<a href="{{ route('index') }}" class="btn btn-secondary btn-sm float-end">View All</a>
				</div>
			</div>
	<div class="card-body">
		<form method="POST" action="{{ URL::to('/update/'.$book->id) }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Book Title</label>
				<div class="col-sm-10">
					<input type="text" name="book_title" class="form-control" value="{{ $book->book_title }}" />
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Book Author</label>
				<div class="col-sm-10">
					<input type="text" name="book_author" class="form-control" value="{{ $book->book_author }}" />
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Book Cost</label>
				<div class="col-sm-10">
					<input type="text" name="book_cost" class="form-control" value="{{ $book->book_cost }}" />
				</div>
			</div>
			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $book->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit Details" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')