@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0 bg-primary">
    <div class="row">
        <div class="col-md-3">
            <h2>User Info</h2>
            @if(isset($user->profile_image))
                <h1>持ってる</h1>
            @else
                <h1>持ってない</h1>
                <img src="{{ asset('images/no-image.png') }}" alt="">
            @endif
            <table class="table">
                <tbody>
                    <tr>
                        <th>name</th>
                        <th>{{ $user->name }}</th>
                    </tr>
                    <tr>
                        <th>email</th>
                        <th>{{ $user->email }}</th>
                    </tr>
                </tbody>
            </table>
        
        <div>
            <h2 class="mt-3">New Book</h2>
            {{ Form::open(['route' => 'book.create', 'method' => 'post', 'files' => 'true']) }}
            
            {{ Form::label('title', 'タイトル') }}<br>
            {{ Form::text('title') }}<br>
            
            {{ Form::label('body', '内容') }}<br>
            {{ Form::text('body') }}<br>
            
            {{ Form::label('image', '画像') }}<br>
            {{ Form::file('image') }}<br>
            
            {{ Form::button('登録', ['type' => 'submit']) }}
            
            {{ Form::close() }}
        </div>
        </div>
        
        <div class="col-md-8 offset-md-1 bg-secondary">
            aaa
        </div>
    </div>
</div>
@endsection