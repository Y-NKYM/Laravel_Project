<div>
    @if(Route::current()->getName() == 'book.edit')
        {{ Form::open(['route' => ['book.update', $book->id], 'method' => 'patch', 'files' => 'true']) }}
    @else
        {{ Form::open(['route' => 'book.create', 'method' => 'post', 'files' => 'true']) }}
    @endif
    <div class="mb-3">
        {{ Form::label('title', 'タイトル', ['class'=>'form-label']) }}<br>
        @if(Route::current()->getName() == 'book.edit')
            {{ Form::text('title', $book->title, ['class'=>'form-control']) }}
        @else
            {{ Form::text('title', null, ['class'=>'form-control']) }}
        @endif
    </div>
    <div class="mb-3">
        {{ Form::label('body', '内容', ['class'=>'form-label']) }}<br>
        @if(Route::current()->getName() == 'book.edit')
            {{ Form::text('body', $book->body, ['class'=>'form-control']) }}
        @else
            {{ Form::text('body', null, ['class'=>'form-control']) }}
        @endif
    </div>
    <div class="mb-3">
        {{ Form::label('image', '画像', ['class'=>'form-label']) }}<br>
        {{ Form::file('image', null, ['class'=>'form-control']) }}
    </div>
    <div>
        @if(Route::current()->getName() == 'book.edit')
            {{ Form::button('更新', ['type' => 'submit', 'class'=>'btn btn-success']) }}
        @else
            {{ Form::button('登録', ['type' => 'submit', 'class'=>'btn btn-success']) }}
        @endif
    </div>
    {{ Form::close() }}
</div>


