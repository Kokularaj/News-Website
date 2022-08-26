<html>
    <head>
        <title></title>
    </head>

        <body>
            @foreach ($news as $item)

                {{$item->id}}
                {{$item->name}}
                {{$item->title}}
                {{$item->description}}


                    <form method="post" action="{{ route('delete.destroy', $item->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger delete" title='Delete'>Delete</button>
                    </form>




            @endforeach





</body>
</html>




