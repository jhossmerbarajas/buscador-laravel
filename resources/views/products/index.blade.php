@extends('layouts.layouts')
@section('title-app', 'Products')

@section('content')

	<form action="{{ route('product.store') }}" method="POST"  enctype="multipart/form-data">
		@csrf
		<div>
			<input type="text" name="name" placeholder="Name">
			@error("name")
				<span> {{ $message }} </span>
			@enderror
		</div>
		<div>
			<textarea name="description"cols="30" rows="10"></textarea>
			@error("description")
				<span> {{ $message }} </span>
			@enderror
		</div>
		<div>
			<input type="file" name="file" >
			@error("file")
				<span> {{ $message }} </span>
			@enderror
		</div>

		<div>
			<input type="submit" value="Save" >
		</div>
	</form>

	@foreach ($products as $product)
		<p> {{ $product->name }} </p>
		<p> {{ $product->description }} </p>
		<img src="{{ asset(Storage::url($product->url_img)) }}" alt="">
	@endforeach
	
@endsection