@extends('layout.master')
@section('title','product')
    

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea type="text" name="description" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="{{route('product.index')}}" class="btn btn-dark btn-sm">Back</a>
                            <button type="submit" class="btn btn-primary btn-sm">Add</button>
                              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection