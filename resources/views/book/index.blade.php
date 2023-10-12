@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0">
    <div class="row">
        <div class="col-md-3">
            <h2>User Info</h2>
            @if(isset($user->profile_image))
                <img src="{{ 'storage/'. $user['portfolio_image'] }}" alt="portfolio_image" style="height:100px; width:auto;">
            @else
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
                <div class="mb-3">
                    {{ Form::label('title', 'タイトル', ['class'=>'form-label']) }}<br>
                    {{ Form::text('title', null, ['class'=>'form-control']) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('body', '内容', ['class'=>'form-label']) }}<br>
                    {{ Form::text('body', null, ['class'=>'form-control']) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('image', '画像', ['class'=>'form-label']) }}<br>
                    {{ Form::file('image', null, ['class'=>'form-control']) }}
                </div>
                {{ Form::button('登録', ['type' => 'submit', 'class'=>'btn btn-success']) }}
                {{ Form::close() }}
            </div>
        </div>
        
        <div class="col-md-8 offset-md-1 bg-secondary">
            <h2>Books</h2>
            <table class="table table-hover table-inverse">
                <thead>
                    <tr>
                        <th></th>
                        <th>タイトル</th>
                        <th>内容</th>
                        <th>投稿者</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>
                            @if(isset($book->image))
                                <img src="{{ 'storage/'. $book['image'] }}" alt="book_image" style="height:50px; width:auto;">
                            @else
                                <img src="{{ asset('images/no-image.png') }}" alt="book_image">
                            @endif
                        </td>
                        <td><a href="{{ route('book.show', ['id'=>$book->id]) }}">{{ $book->title }}</a></td>
                        <td>{{ $book->body }}</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection