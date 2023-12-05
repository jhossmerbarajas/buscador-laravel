@extends('layouts.layouts')
@section('title-app', 'Category Create')

@section('content')
	<form class="col" action="{{ route('category.store') }}" method="POST"  >
        @csrf
        <div class="mb-3">
            <label for="nameProduct" class="form-label"> Name Category </label>
            <input type="text" name="category" class="form-control" id="nameCategory" placeholder="Name Category">
            @error("category")
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <div class="mb-3">
        	<input type="submit" class="btn btn-primary" value="Create">
        </div>
             
    </form>
@endsection