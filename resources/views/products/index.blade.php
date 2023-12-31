@extends('layouts.layouts')
@section('title-app', 'Products')

@section('content')
  

  <a href="{{ route('product.create') }}" class="btn btn-primary my-2 col-sm-2">Create Product</a>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach($products as $product)
            <div class="col">
              <div class="card shadow-sm">
               
                <img src="{{ asset(Storage::url($product->url_img)) }}"  class="bd-placeholder-img card-img-top" width="100%" height="225" role="img">

                <div class="card-body">
                    <h2> {{ $product->name }} </h2>
                  <p class="card-text">
                      {{ $product->description }}
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{ route('product.show', $product->id) }}" type="button" class="btn btn-sm btn-outline-secondary"> 
                            View 
                        </a>
                        <a href="{{ route('category.show', $product->category) }}" type="button" class="btn btn-sm btn-outline-secondary">
                            {{ $product->category }}
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