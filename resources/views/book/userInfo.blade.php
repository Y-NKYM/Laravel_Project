<h2>User Info</h2>
@if($user->profile_image != "" || $user->profile_image != null)
    <img src="{{ '/storage/'. $user['profile_image'] }}" alt="profile_image" style="height:100px; width:auto;">
@else
    <img src="{{ asset('/images/no-image.png') }}" alt="">
@endif
<table class="table">
    <tbody>
        <tr>
            <th>名前</th>
            <th>{{ $user->name }}</th>
        </tr>
        <tr>
            <th>紹介文</th>
            <th>{{ $user->introduction }}</th>
        </tr>
    </tbody>
</table>
<a class="btn btn-secondary w-100" href="{{route('user.edit', $user->id)}}"><i class="fa-solid fa-user-gear"></i></a>