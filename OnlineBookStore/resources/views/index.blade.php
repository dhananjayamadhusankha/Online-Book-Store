@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Book Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('books.create') }}" class="btn btn-success btn-sm float-end">Add Book</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Cost</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						
						<td>{{ $row->book_title }}</td>
						<td>{{ $row->book_author }}</td>
						<td>{{ $row->book_cost }}</td>
					
						<td>
							<form method="post" action="{{ route('books.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('books.show', $row->id) }}" class="btn btn-primary btn-sm margin-left">View</a>
								<a href="{{ route('books.edit', $row->id) }}" class="btn btn-warning btn-sm margin-left">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm margin-left" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection