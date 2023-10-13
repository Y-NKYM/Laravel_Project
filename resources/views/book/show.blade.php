@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0">
    <div class="row">
        <div class="col-md-3">
            @include('book.inputSection')
        </div>
        
        <div class="col-md-8 offset-md-1">
            <div class="text-center mb-3">
                @if(isset($book->image))
                    <img src="{{ '/storage/'. $book['image'] }}" alt="book_image" style="height:300px; width:auto;">
                @else
                    <img src="{{ asset('/images/no-image.png') }}" alt="book_image">
                @endif
            </div>
            <table class="table mx-auto" style="table-layout:fixed;">
                <tbody>
                    <tr>
                        <th>タイトル</th>
                        <td>{{ $book->title }}</td>
                    </tr>
                    <tr>
                        <th>内容</th>
                        <td>{{ $book->body }}</td>
                    </tr>
                    <tr>
                        <th>投稿者</th>
                        <td>{{ $book->user->name }}</td>
                    </tr>
                </tbody>
            </table>
            @if($user == $book->user)
            <div class="d-flex justify-content-end">
                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-success px-4 me-5">編集</a>
                <div>
                    {{ Form::open(['route' => ['book.destroy', $book->id], 'method' => 'delete']) }}
                    {{ Form::button('削除', ['type' => 'submit', 'class' => 'btn btn-danger px-4', 'onclick' => 'return confirm("削除しますか")']) }}
                    {{ Form::close() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection