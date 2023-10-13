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