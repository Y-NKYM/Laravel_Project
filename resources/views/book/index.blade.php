@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0">
    <div class="row">
        <div class="col-md-3">
            @include('book.inputSection')
        </div>
        
        <div class="col-md-8 offset-md-1">
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
                        <td><a href="{{ route('book.show', [$book->id]) }}">{{ $book->title }}</a></td>
                        <td>{{ $book->body }}</td>
                        <td>{{ $book->user->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection