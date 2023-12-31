@extends('layouts.app')

@section('content')

@if (session('notice'))
  <p>{{ session('notice') }}</p>
@endif

<div class="container">
    <h1>管理者画面</h1>
    <ul>
        <li>管理者（Administrator）ログインユーザーID:
            @if (Auth::guard('admins')->check())
              {{ Auth::guard('admins')->user()->email }}
            @endif
        </li>

        <li>マイページ（users） ログインユーザーID</li>
    </ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<a href="/admin/logout">ログアウト</a>
@endsection