<tr>
    <td class="text-center" style="width: 50px">
        @if(isset($book->image))
            <img src="{{ '/storage/'. $book['image'] }}" alt="book_image" style="height:80px; width:auto;">
        @else
            <img src="{{ asset('/images/no-image.png') }}" alt="book_image" style="height:80px; width:auto;">
        @endif
    </td>
    <td class="text-oneline-overflow" style="max-width: 30px;"><a href="{{ route('book.show', [$book->id]) }}">{{ $book->title }}</a></td>
    <td class="text-oneline-overflow">{{ $book->body }}</td>
    @if(Route::current()->getName() != 'user.show')
        <td class="text-oneline-overflow" style="max-width: 30px;"><a href="{{ route('user.show', $book->user->id) }}">{{ $book->user->name }}</a></td>
    @endif
</tr>