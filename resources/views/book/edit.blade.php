@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0">
    <div class="row">
        <div class="col-md-3">
            @include('book.userInfo')
        </div>
        
        <div class="col-md-8 offset-md-1">
            <h2>Book Edit</h2>
            @include('book.newBook')
            
        </div>
    </div>
</div>
@endsection