<?php 
use App\Http\Controllers\CartController;

?>
@extends('layout.master')

@section('title','HomePage')

@section('content')
    <div class="col-12">
        
        <div class="mt-3">
            <a href="{{route('checkBill')}}" class="btn btn-warning">Check bill</a>
        </div>
        <div class="row my-4">
            
            <div class="col-3">
                <a href="{{route('product.all')}}" class=" bg-info p-5 card"> 
                    <h3 class="text-dark">Table 1</h3>
                    @isset($orders)
                        @foreach ($orders as $item)
                            <div class="">
                                {{$item->name}}
                            </div>
                        @endforeach
                    @endisset
                </a >
            </div>
        </div>
    </div>
@endsection

