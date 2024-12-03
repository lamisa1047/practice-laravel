<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Edit page</title>
</head>
<body>
    
<form method="POST" action="{{ route('post.update', $newpost->id ) }}">

        @csrf
        @method('POST')  
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$newpost->name}}">
        <label for="discription">Discription</label>
        <input type="text" name="discription" value="{{$newpost->discription}}">
        <input type="file" name="image" value="{{$newpost->image}}">
        <button>Submit</button>
    </form>
   
</body>
</html>