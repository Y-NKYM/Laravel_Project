@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0">
    <div class="row">
        <div class="col-md-3">
            @include('book.userInfo')
            <h2 class="mt-3">New Book</h2>
            @include('book.newBook')
        </div>
        
        <div class="col-md-8 offset-md-1">
            <h2>{{ $user->name }}'s Books</h2>
            <table class="table table-hover table-inverse">
                <thead>
                    <tr>
                        <th></th>
                        <th>タイトル</th>
                        <th>内容</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->books as $book)
                        @include('book.bookTable')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection