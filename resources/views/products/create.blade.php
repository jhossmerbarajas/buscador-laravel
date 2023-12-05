@extends('layouts.layouts')
@section('title-app', 'Products')

@section('content')
  <div class="col-md-4">

    <h3> Create Product </h3>
        
        <form class="col" action="{{ route('product.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nameProduct" class="form-label"> Name Product </label>
                <input type="text" name="name" class="form-control" id="nameProduct" placeholder="Name Product">
                @error("name")
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descriptionProduct" class="form-label"> Description </label>
                <textarea name="description" id="descriptionProduct" cols="30" rows="5" class="form-control"></textarea>
                   @error("description")
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-3">
                <select class="form-select" name="category" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                      @endforeach
                </select>
            </div>
           

            <div class="mb-3">
                <input type="file" name="file" class="form-control" >
                   
                @error("file")
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
           
            <div>
                <input class="btn btn-primary" type="submit" value="Save" >
                {{-- <a href="{{ route('product.index') }}" class="btn btn-secondary">Products</a> --}}
            </div>
        </form>

    </div>
@endsection