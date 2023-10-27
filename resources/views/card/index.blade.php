@extends('layouts.app')

@section('content')
<div class="container px-5 px-sm-0">
    <h1>ＪＯＫＥＲ　JOKER</h1>
    <table class="table table-hover table-inverse">
        <thead>
            <tr>
                <th>カード名</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cards as $card)
            <tr>
                <td>{{ $card->name }}</td>
                <td class="text-center" style="width: 50px">
                    @if(isset($card->image))
                        <img src="{{ '/cards/'. $card['image'] }}" alt="card_image" style="height:80px; width:auto;">
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection