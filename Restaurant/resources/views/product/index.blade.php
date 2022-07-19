@extends('layout.master')

@section('title','product')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{route('product.product-create')}}" class="btn btn-info btn-sm my-3">Create</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Description</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($products as $product)
                        <tbody>
                            <tr>
                                <td>{{$i,$i++}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <form action="{{route('product.destroy',$product->id)}}" method="post" class="d-inline-block" >
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Are you sure {{$product->name}} Delete ? ')"> Delete</button>
                                    </form>                                
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection