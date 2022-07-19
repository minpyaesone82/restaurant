@extends('layout.master')
@section('title','Edit')
    

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <form action="{{route('product.update',$product->id)}}" method="post">
                        @csrf
                        @method("put")
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control"  value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea type="text" name="description" class="form-control" rows="3"> {{old('description',$product->description)}} </textarea>
                        </div>
                        <div class="form-group">
                            <a href="{{route('product.index')}}" class="btn btn-dark btn-sm">Back</a>
                            <button type="submit" class="btn btn-info btn-sm">Update</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection