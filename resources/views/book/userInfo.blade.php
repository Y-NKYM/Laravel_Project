<h2>User Info</h2>
@if(isset($user->profile_image))
    <img src="{{ 'storage/'. $user['portfolio_image'] }}" alt="portfolio_image" style="height:100px; width:auto;">
@else
    <img src="{{ asset('images/no-image.png') }}" alt="">
@endif
<table class="table">
    <tbody>
        <tr>
            <th>名前</th>
            <th>{{ $user->name }}</th>
        </tr>
        <tr>
            <th>メール</th>
            <th>{{ $user->email }}</th>
        </tr>
    </tbody>
</table>
<a class="btn btn-secondary w-100" href="{{route('user.edit', $user->id)}}"><i class="fa-solid fa-user-gear"></i></a>