@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="container mt-5">
   <div class="row">
   	<div class="col-md-12">
   		<div class="card">
   			<div class="card-header border-warning">Dashboard</div>
            <img class="card-img" src="/images/codeigniter.png" width="100%">
   			<div class="card-body">
   				<form method="POST" action="/upload" enctype="multipart/form-data">
   					@foreach($errors->all() as $error)
   						<p class="alert alert-danger">{{ $error }}</p>
   					@endforeach

   					@if(session('status'))
   						<div class="alert alert-success">
   							{{ session('status') }}
   						</div>
   					@endif

   					{{ csrf_field() }}

   					<div class="custom-file">
   						<label for="image" class="custom-file-label">Choose an image</label>
   						<input class="custom-file-input" type="file" name="image" id="image">
   					</div>

   					<button type="submit" class="btn btn-default btn-raised">Upload</button>
   				</form>
   			</div>
   		</div>
   	</div>
   </div>
</div>
@endsection
