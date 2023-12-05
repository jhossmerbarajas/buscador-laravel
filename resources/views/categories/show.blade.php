@extends('layouts.layouts')
@section('title-app', 'Products')

@section('content')
  
            {{-- <img src="{{ asset(Storage::url($product->url_img)) }}" alt=""> --}}
    <h3 class="my-3"> {{ $category }}</h3>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach($categories as $category)
    
            <div class="col">
              <div class="card shadow-sm">
                
                 <img src="{{ asset(Storage::url($category->url_img)) }}"  class="bd-placeholder-img card-img-top" width="100%" height="225" role="img">

                <div class="card-body">
                    <h2> {{ $category->name }} </h2>
                  <p class="card-text">
                      {{ $category->description }}
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{ route('product.index') }}" type="button" class="btn btn-sm btn-outline-secondary"> 
                            Products 
                        </a>
                        <a href="{{ route('category.index') }}" type="button" class="btn btn-sm btn-outline-secondary">
                            Categories
                        </a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>




    
@endsection