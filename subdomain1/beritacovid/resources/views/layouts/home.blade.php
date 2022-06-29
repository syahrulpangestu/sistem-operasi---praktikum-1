@extends('master')
@section('title', 'Home')
@section('content')
<div class="containers">
    <div class="rows">
        <div class="col-9">
            <h1>Hot News</h1><hr>
            <div class="rows">
                <div class="col-12">
                    @include('layouts.carousel')                        
                </div>
            </div>                
        </div>
        <div class="col-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-9">
            <h1>All News</h1><hr>
            <div class="rows">
                    @include('layouts.card')                        
            </div> 
            @include('layouts.pagination')                               
        </div>            
    </div>
</div>    
@endsection

