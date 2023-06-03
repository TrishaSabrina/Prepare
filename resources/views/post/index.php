<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                @foreach($posts as $post)
                <td>{{ $post->id}}</td>
                <td>{{ $post->title}}</td>
                <td>{{ $post->details}}</td>
                <td><a href="{{ route('post.show',$post->id)}}">Show</a> 
                
                <a href="<?php echo url('/post/edit',$post->id);?>">Edit</a>
            <form action="<?php echo url('/post/delete',$post->id) ?>" method="post">
        <?php echo csrf_field(); ?>
        <input hidden type="text" name="_method" value="DELETE">
<button>Delete</button>
        
        </form>
            
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>