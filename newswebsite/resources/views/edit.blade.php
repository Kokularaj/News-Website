<html>
    <head>
        <title></title>
    </head>
    <body>


        @foreach ($news as $item )
        {{-- <form action="{{url(edit/{id})}}" method="POST"> --}}
            <center><img src="{{ asset('uploads/photos/'.$item->image)}}" width="600px" height="600px" alt="Image"></center>
            <br>
            <marquee behavior="scroll" direction="right">
            <h1><b>{{$item->description}}</b></h1>
        </marquee>
            <button><a href="{{ route('edit.edit', $item->id) }}">EDIT</a></button>
            {{-- <button><a href="{{ route('delete.destroy', $item->id) }}">DELETE</a></button>
            <button><a href="home">Publish</a></button> --}}


</form>
@endforeach
</body>
</html>
