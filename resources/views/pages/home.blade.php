
@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Products</h2>
            <a href="{{Route('create')}}" class="btn btn-success mb-2">Create New Product</a>
          
        </div>
    </div>
    <div class="row">
    
            <div class="col-lg-4 mb-4">
                <div class="card">
                    {{-- @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                    @endif --}}
                    <div class="card-body">
                        <h5 class="card-title">title</h5>
                        <p class="card-text">detail</p>
                        <a href="" class="btn btn-primary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                          
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
       
    </div>
</div>
@endsection

