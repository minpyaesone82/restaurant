@extends('layout.master')

@section('title','Cart Details')
    

@section('content')


    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card mt-4">
                <div class="card-body">
                    @if ($total == 0 )
                    <p>Please order the foods. 
                        <span class="text-info">You have nothing check for bill</span></p>
                    @else
                    <p> Here is you bill : ${{$total}}</p>
                    <p>Thank you so much for checking bill</p>
                    @endif
                    
                </div>
            </div>
            
        </div>
    </div>

@endsection