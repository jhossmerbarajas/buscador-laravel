@extends('layouts.layouts')
@section('title-app', 'Products')

@section('content')
    <div class="col-md-4">
        
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

            {{-- <div class="mb-3">
                <label for="priceProduct" class="form-label"> Price Product </label>
                <input type="number" name="price" class="form-control" id="priceProduct" slep="0.00">
                @error("price")
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div> --}}

            <div class="mb-3">
                <input type="file" class="form-control" >
                   
                @error("file")
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
            {{-- <div class="input-group mb-3">
                <label class="form-label" for="name-product"> Name Product </label>
                <input type="text" class="form-control" id="name-product" name="name">
             
            </div>
            <div class="input-group mb-3">
                <label class="form-label" for="description-product"> Description Product </label>
                <textarea class="form-control" id="description-product" name="description"cols="30" rows="10"></textarea>
             
            </div>
            <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                @error("file")
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div> --}}

            <div>
                <input class="btn btn-primary" type="submit" value="Save" >
            </div>
        </form>

    </div>

    <div class="col">
        
        @foreach ($products as $product)
            {{-- <img src="{{ asset(Storage::url($product->url_img)) }}" alt=""> --}}
            

            <div class="col">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"> Category </strong>
                    <h3 class="mb-0">{{ $product->name }}</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">
                        {{ $product->description }}
                    </p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ $product->url_img }}" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

                </div>
              </div>
            </div>
        @endforeach

    </div>
    
@endsection