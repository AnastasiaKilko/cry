<div>
    @foreach($book as $catalog)
        <img src="{{  $catalog->cover_image  }}" alt="cover_image">
        <p>{{$catalog->title}}</p>
        <p>{{$catalog->id_book_types}}</p>
        @endforeach
</div>
