@extends('layout.master')

@section('title','Products')
    
@section('content')
    <div class="row">
       <div class="container my-4">
        <div class="col-12">
            <div class="row">
                
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4>{{$product->name}}</h4>
                                    <p>${{$product->price}}</p>
                                </div>
                                <form action="{{route('add_to_cart')}}" method="post" >
                                    @csrf
                                    <input type="hidden" name="product_id" value={{$product->id}}>
                                    <div class="p-2 text-center">
                                        <button class="btn btn-primary w-100" type="submit"> <i class="fa fa-shopping-cart mr-2"></i> Add To Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach 
                
            </div>
        </div>
       </div>
    </div>
@endsection