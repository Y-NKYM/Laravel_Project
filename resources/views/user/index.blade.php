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
            <h2>Users</h2>
            <table class="table table-hover table-inverse">
                <thead>
                    <tr>
                        <th></th>
                        <th>ユーザー名</th>
                        <th>紹介文</th>
                        <th>登録本数</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center" style="width: 50px">
                                @if(isset($user->profile_image))
                                    <img src="{{ '/storage/'. $user['profile_image'] }}" alt="profile_image" style="height:80px; width:auto;">
                                @else
                                    <img src="{{ asset('/images/no-image.png') }}" alt="profile_image" style="height:80px; width:auto;">
                                @endif
                            </td>
                            <td class="text-oneline-overflow" style="max-width: 30px;"><a href="{{ route('user.show', [$user->id]) }}">{{ $user->name }}</a></td>
                            <td class="text-oneline-overflow" style="max-width: 30px;">{{ $user->introduction }}</td>
                            <td>{{ $user->books->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection