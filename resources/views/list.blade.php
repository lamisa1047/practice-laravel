<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List page</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->discription }}</td> 
                <td><img src="{{ $post->image }}" alt="Image" width="100"></td>
                <td><a href="{{ route('post.edit', $post->id) }}">Edit</a></td>

                <td>
    <form action="{{ route('post.delete', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
