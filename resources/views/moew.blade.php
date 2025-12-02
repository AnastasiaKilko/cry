<div>
    @foreach($book as $moew)
        <img src="{{  $moew->cover_image  }}" alt="cover_image">
        <p>{{$moew->title}}</p>
        @endforeach
</div>
