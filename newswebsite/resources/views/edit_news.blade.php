
 <!DOCTYPE html>
 <html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>


 <div class="container">

   <form action="{{route('edit.update',$news->id)}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <h1><center> EDIT NEWS </center></h1>
 <div class="row">
     <div class="col-12">


     <div class="form-group" >
         <label for="pwd">Name:</label>
         <input type="text" class="form-control" name="name" id="name" value="{{$news->name}}" placeholder="Enter name">
       </div>
       <div class="form-group" >
         <label for="pwd">Title:</label>
         <input type="text" class="form-control" name="title" id="title" value="{{$news->title}}" placeholder="Enter title">
       </div>

     <div class="form-group" >
         <label for="pwd">Description:</label>
         <input type="text" name="description" class="form-control" value="{{$news->description}}" id="description" placeholder="Enter description">
     </div>
     <div class="form-group" >
         <label for="pwd">Image:</label>
         <input type="file" name="image" id="image" class="form-control">{{$news->image}}
     </div>
     <div class="col-md-4">
         <button type="submit" class="btn btn-sucess"><a href="{{route('allnews') }}">update</a></button>
         @csrf
     </div>


     </div>
 </div>
   </form>
 </div>
 </body>
 </html>
