@extends('master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Create Product</h2>
            <a href="{{Route('home')}}" class="btn btn-primary mb-2">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{Route('update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h1>{{$product->id}}</h1>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$product->title}}" required>
                </div>
            
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control"  value="{{$product->status}}"  required>
                </div>
                <div class="form-group">
                    <label for="stock">stock</label>
                    <input type="text" name="stock" class="form-control" value="{{$product->stock}}"  required>
                </div>
                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea name="details" class="form-control" rows="4" required>{{ $product->details }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
