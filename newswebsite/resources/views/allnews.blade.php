<html>
    <head>
        <title></title>
    </head>
    <body>
            @foreach ($news as $item)

            <center> <img src="{{ asset('uploads/photos/'.$item->image)}}" width="420px" height="400px" alt="Image"></center>
                <marquee behavior="scroll" direction="right">  <h1>{{$item->description}}</h1></marquee>

                <button><a href="{{route('edit.edit',$item->id) }}">EDIT</a></button>

                <button><a href="{{ route('delete.destroy', $item->id) }}">DELETE</a></button>
                <button><a href="home">Publish</a></button>
            @endforeach







</body>
</html>




