@extends('layouts.layouts')
@section('title-app', 'Categories')

@section('content')

	
    <a href="{{ route('category.create') }}" class="my-2 btn btn-secondary col-md-2">Create Category</a>

    
    	<div class="my-5 btn-group">
            <div class="col-md-4">
    			@foreach($categories as $category)
            		<a href="{{ route('category.show', $category->category) }}" class="btn btn-outline-primary" > {{ $category->category }} </a>
    			@endforeach
        	</div>
    	</div>
    
@endsection