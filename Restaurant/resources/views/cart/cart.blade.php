@extends('layout.master')

@section('title','Cart Details')
    

@section('content')
    <div class="row">
        <div class="col-12 col-md-8">           
                <div class="card mt-4">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Price</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>
                                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger " >Remove</a>
                                        </td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form action="{{route('order')}}" method="get">
                        <button type="submit" class="btn btn-outline-success m-3 ml-2">Order Now</button>
                    </form>
                </div> 
        </div>
    </div>

@endsection