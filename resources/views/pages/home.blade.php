
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


        @foreach ($products as $item)
        <div class="col-lg-4 mb-4">
            <div class="card">
                @if ($item->image)
                    <img src="{{ URL('storage/'. $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->details}}</p>
                    <a href="" class="btn btn-primary">View</a>
                    <a href="{{Route('edit',$item->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{Route('delete',$item->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                   
                </div>
            </div>
        </div>
        @endforeach
    
        
       
    </div>
</div>
@endsection

