@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0 w-50">
    <h2 class="mb-3">User Edit</h2>
    <div>
        {{ Form::open(['route' => ['user.update', $user->id], 'method' => 'patch', 'files' => 'true']) }}
        <div class="mb-3">
            {{ Form::label('profile_image', 'プロフィール画像', ['class'=>'form-label']) }}<br>
            {{ Form::file('profile_image', null, ['class'=>'form-control']) }}
        </div>
        <div class="mb-3">
            {{ Form::label('name', '名前', ['class'=>'form-label']) }}<br>
            {{ Form::text('name', $user->name, ['class'=>'form-control']) }}
        </div>
        <div class="mb-3">
            {{ Form::label('introduction', '紹介文', ['class'=>'form-label']) }}<br>
            {{ Form::text('introduction', $user->introduction, ['class'=>'form-control']) }}
        </div>
        <div>
            {{ Form::button('更新', ['type' => 'submit', 'class'=>'btn btn-success']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
@endsection

